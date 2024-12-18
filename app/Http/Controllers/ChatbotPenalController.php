<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenAI\Laravel\Facades\OpenAI;

class ChatbotPenalController extends Controller
{
    public function submit(Request $request)
    {
        // Validar que el campo de pregunta está presente
        $request->validate([
            'askText' => 'required|string'
        ]);

        // Obtener la pregunta del usuario desde el Request
        $userMessage = $request->input('askText');
        $userId = $request->user() ? $request->user()->id : null;

        // Buscar las leyes relevantes en la base de datos en base a la pregunta del usuario
        $keywords = explode(' ', $userMessage);
        $lawsQuery = DB::table('leyes_penales');

        // Buscar entre todas las leyes que contienen al menos una palabra clave de la pregunta del usuario
        foreach ($keywords as $keyword) {
            $lawsQuery->orWhere('descripcion_ley', 'LIKE', '%' . $keyword . '%');
        }

        // Obtener el contenido de las leyes encontradas
        $laws = $lawsQuery->pluck('descripcion_ley')->toArray();
        $txtContent = implode("\n", $laws);

        // Definir el rol de la IA
        $messages = [
            ['role' => 'system', 'content' => 'Eres un asesor jurídico especializado en las leyes penales de Chile. 
            Solo puedes responder usando la información contenida en la base de datos de leyes penales que te proporcionaré. 
            Responde a las preguntas como si fueras un abogado profesional. 
            Si la pregunta no tiene relación con las leyes o decretos chilenos penales, responde de manera natural con un mensaje como: 
            "Lo siento, solo puedo ayudarte con temas relacionados con la legislación chilena penal."
            Cuando respondas a las consultas legales penales, procura que tus respuestas sean breves, claras y precisas, enfocándote en los puntos clave y la mejor orientación legal posible.'],
            ['role' => 'system', 'content' => 'Este es el contenido de las leyes penales: ' . substr($txtContent, 0, 20000)], // limitar el archivo con una cierta cantidad de caracteres
        ];

        // Recuperar el historial de consultas del usuario si está autenticado
        $history = [];
        if ($userId) {
            $history = DB::table('chat_histories_penal')
                ->where('user_id', $userId)
                ->orderBy('created_at', 'asc')
                ->get(['user_message', 'bot_reply'])
                ->toArray();

            foreach ($history as $entry) {
                $messages[] = ['role' => 'user', 'content' => $entry->user_message];
                $messages[] = ['role' => 'assistant', 'content' => $entry->bot_reply];
            }
        }

        // Añadir la nueva pregunta del usuario
        $messages[] = ['role' => 'user', 'content' => $userMessage];

        // Llamada a la API de OpenAI
        $response = OpenAI::chat()->create([
            'model' => 'gpt-4-turbo',
            'messages' => $messages,
            'temperature' => 0.9,
            'max_tokens' => 500,
        ]);

        // Obtener la respuesta de la IA
        $botReply = $response->choices[0]->message->content;

        // Guardar la consulta y respuesta en el historial si el usuario está autenticado
        if ($userId) {
            DB::table('chat_histories_penal')->insert([
                'user_id' => $userId,
                'user_message' => $userMessage,
                'bot_reply' => $botReply,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Devolver la respuesta y el historial a la vista
        return view('chatbot.penal', [
            'userMessage' => $userMessage,
            'botReply' => $botReply,
            'history' => $history
        ]);
    }
}