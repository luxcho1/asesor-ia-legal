<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class ChatbotCentralControllerTest extends TestCase
{

    public function testSubmit()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Simular una solicitud POST al controlador
        $response = $this->actingAs($user)->postJson(route('chatbot.central.ajax'), [
            'askText' => 'Dime las leyes de transito vigentes'
        ]);

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que la respuesta contenga la estructura esperada
        $response->assertJsonStructure([
            'userMessage',
            'botReply'
        ]);

        // Verificar que el historial se haya guardado en la base de datos
        $this->assertDatabaseHas('chat_historial', [
            'user_id' => $user->id,
            'especializacion' => 'Central',
            'Conversacion' => 'Dime las leyes de transito vigentes'
        ]);
    }

    public function testSqlInjection()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar código SQL en el campo de entrada
        $maliciousInput = "'; DROP TABLE chat_historial; --";
        $response = $this->actingAs($user)->postJson(route('chatbot.central.ajax'), [
            'askText' => $maliciousInput
        ]);

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que la tabla no haya sido eliminada
        $this->assertTrue(Schema::hasTable('chat_historial'));
    }

    public function testXss()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar código XSS en el campo de entrada
        $maliciousInput = "<script>alert('XSS');</script>";
        $response = $this->actingAs($user)->postJson(route('chatbot.central.ajax'), [
            'askText' => $maliciousInput
        ]);

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que el código XSS haya sido eliminado o escapado
        $response->assertDontSee("<script>alert('XSS');</script>");
    }
}