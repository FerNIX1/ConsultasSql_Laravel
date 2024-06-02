<?php

use Illuminate\Database\Seeder;
use App\Models\Pedido;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        $pedidos = [
            ['cantidad' => 2, 'total' => 150.00, 'usuario_id' => 1],
            ['cantidad' => 1, 'total' => 250.00, 'usuario_id' => 2],
            ['cantidad' => 3, 'total' => 100.00, 'usuario_id' => 3],
            ['cantidad' => 4, 'total' => 200.00, 'usuario_id' => 4],
            ['cantidad' => 2, 'total' => 75.00, 'usuario_id' => 5],
        ];

        foreach ($pedidos as $pedido) {
            Pedido::create($pedido);
        }
    }
}

