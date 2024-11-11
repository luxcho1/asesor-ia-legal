<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Schema;

class AbogadoTest extends TestCase
{

    public function testSqlInjection()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar código SQL en el campo de entrada
        $maliciousInput = "'; DROP TABLE abogados; --";
        $response = $this->actingAs($user)->post('/abogados', [
            'name' => $maliciousInput,
            'especialidad' => 'Civil',
            'email' => 'test' . uniqid() . '@asesorialegal.com',
            'telefono' => '123456789',
            'sueldo' => '50000',
            'biografia' => 'Biografía de prueba'
        ]);

        // Verificar que la respuesta no sea exitosa
        $response->assertStatus(500);

        // Verificar que la tabla no haya sido eliminada
        $this->assertTrue(Schema::hasTable('abogados'));
    }

    public function testXss()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create();

        // Intentar inyectar un script malicioso en el campo de entrada
        $maliciousInput = "<script>alert('XSS');</script>";
        $response = $this->actingAs($user)->post('/abogados', [
            'name' => $maliciousInput,
            'especialidad' => 'Civil',
            'email' => 'test' . uniqid() . '@asesorialegal.com',
            'telefono' => '123456789',
            'sueldo' => '50000',
            'biografia' => 'Biografía de prueba'
        ]);

        // Verificar que la respuesta no sea exitosa
        $response->assertStatus(200);

        // Verificar que el script no esté presente en la respuesta
        $response->assertDontSee("<script>alert('XSS');</script>");
    }
}
