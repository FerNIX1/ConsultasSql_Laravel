<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $usuarios = [
            ['nombre' => 'Roberto', 'correo' => 'roberto@example.com', 'telefono' => '123456789'],
            ['nombre' => 'Raúl', 'correo' => 'raul@example.com', 'telefono' => '123456789'],
            ['nombre' => 'Carlos', 'correo' => 'carlos@example.com', 'telefono' => '123456789'],
            ['nombre' => 'María', 'correo' => 'maria@example.com', 'telefono' => '123456789'],
            ['nombre' => 'Luis', 'correo' => 'luis@example.com', 'telefono' => '123456789'],
        ];

        foreach ($usuarios as $usuario) {
            Usuario::create($usuario);
        }
    }
}
