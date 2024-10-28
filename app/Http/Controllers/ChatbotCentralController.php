<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OpenAI\Laravel\Facades\OpenAI;

class ChatbotCentralController extends Controller
{
    public function showCentralChatbot()
    {
        $userId = auth()->id();
        $history = [];

        if ($userId) {
            $history = DB::table('chat_historial')
                ->where('user_id', $userId)
                ->where('especializacion', 'Central')
                ->orderBy('created_at', 'asc')
                ->get(['Conversacion', 'bot_reply'])
                ->toArray();
        }

        return view('chatbot.central', compact('history'));
    }

    public function ajaxSubmit(Request $request)
    {
        // Validar que el campo de pregunta está presente
        $request->validate([
            'askText' => 'required|string'
        ]);

        // Obtener la pregunta del usuario desde el Request
        $userMessage = $request->input('askText');
        $userId = $request->user() ? $request->user()->id : null;

        // Definir el rol de la IA
        $messages = [
            ['role' => 'system', 'content' => 'Eres un asesor jurídico especializado en las leyes y decretos de Chile. 
            Solo puedes responder usando la información contenida en la base de datos de la api de gpt sobre las leyes y decretos de chile. 
            Responde a las preguntas como si fueras un abogado profesional. 
            Si no puedes encontrar la información en tu base de datos de la api de gpt, responde con "Lo siento, no tengo esa informacion en mi base de datos."
            En caso de que el usuario pregunte por abogados especialistas, recomiendale registrarse en nuestra pagina para obtener una experiencia mas completa en asesoramiento legal y poder ponerse en contacto con nuestros abogados especializados en cada area legal.'],
        ];

        // Recuperar el historial de consultas del usuario si está autenticado
        $history = [];
        if ($userId) {
            $history = DB::table('chat_historial')
                ->where('user_id', $userId)
                ->where('especializacion', 'Central')
                ->orderBy('created_at', 'asc')
                ->get(['Conversacion', 'bot_reply'])
                ->toArray();

            foreach ($history as $entry) {
                $messages[] = ['role' => 'user', 'content' => $entry->Conversacion];
                $messages[] = ['role' => 'assistant', 'content' => $entry->bot_reply];
            }
        }

        // Añadir la nueva pregunta del usuario
        $messages[] = ['role' => 'user', 'content' => $userMessage];

        try {
            // Llamada a la API de OpenAI
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
                'temperature' => 0.9,
                'max_tokens' => 150,
            ]);

            // Obtener la respuesta de la IA
            $botReply = $response->choices[0]->message->content;

            // Obtener el próximo id_historial para el usuario
            $nextConversationId = DB::table('chat_historial')
                ->where('user_id', $userId)
                ->max('id_historial') + 1;

            // Guardar la conversación en la base de datos
            if ($userId) {
                DB::table('chat_historial')->insert([
                    'user_id' => $userId,
                    'id_historial' => $nextConversationId,
                    'fecha' => now(),
                    'especializacion' => 'central',
                    'Conversacion' => $userMessage,
                    'bot_reply' => $botReply,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            // Devolver la respuesta en formato JSON
            return response()->json([
                'userMessage' => $userMessage,
                'botReply' => $botReply
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un problema al procesar tu solicitud. Por favor, intenta de nuevo.'], 500);
        }
    }
}