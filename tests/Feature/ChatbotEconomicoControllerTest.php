<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class ChatbotEconomicoControllerTest extends TestCase
{

    public function testSubmit()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Simular una solicitud POST al controlador
        $response = $this->actingAs($user)->postJson(route('chatbot.economica.ajax'), [
            'askText' => '¿Cuáles son las leyes económicas vigentes?'
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
            'especializacion' => 'Economico',
            'Conversacion' => '¿Cuáles son las leyes económicas vigentes?'
        ]);
    }

    public function testSqlInjection()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar código SQL en el campo de entrada
        $maliciousInput = "'; DROP TABLE leyes_economicas; --";
        $response = $this->actingAs($user)->postJson(route('chatbot.economica.ajax'), [
            'askText' => $maliciousInput
        ]);

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que la tabla no haya sido eliminada
        $this->assertTrue(Schema::hasTable('leyes_economicas'));
    }

    public function testXss()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar un script malicioso en el campo de entrada
        $maliciousInput = "<script>alert('XSS');</script>";
        $response = $this->actingAs($user)->postJson(route('chatbot.economica.ajax'), [
            'askText' => $maliciousInput
        ]);

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que el script no esté presente en la respuesta
        $response->assertDontSee("<script>alert('XSS');</script>");
    }
}