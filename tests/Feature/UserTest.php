<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{

    public function testUserAttributes()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password123')
        ]);

        // Verificar que los atributos se asignaron correctamente
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('john@example.com', $user->email);
        $this->assertTrue(password_verify('password123', $user->password));
    }

    public function testHiddenAttributes()
    {
        // Crear un usuario de prueba
        $user = User::factory()->create([
            'password' => bcrypt('password123'),
            'remember_token' => 'some_random_token'
        ]);

        // Convertir el usuario a un array
        $userArray = $user->toArray();

        // Verificar que los atributos ocultos no estén presentes en el array
        $this->assertArrayNotHasKey('password', $userArray);
        $this->assertArrayNotHasKey('remember_token', $userArray);
    }

    public function testCasts()
    {
        // Crear un usuario de prueba con una fecha de verificación de email
        $user = User::factory()->create([
            'email_verified_at' => '2023-10-01 12:34:56'
        ]);

        // Verificar que el atributo se haya casteado correctamente
        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $user->email_verified_at);
        $this->assertEquals('2023-10-01 12:34:56', $user->email_verified_at->format('Y-m-d H:i:s'));
    }
}
