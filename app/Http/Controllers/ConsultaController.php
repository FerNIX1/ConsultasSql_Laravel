<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultaController extends Controller
{
    // 1. Recupera todos los pedidos asociados al usuario con ID 2
    public function pedidosUsuario2()
    {
        $pedidosUsuario2 = DB::table('pedidos')->where('usuario_id', 2)->get();
        return response()->json($pedidosUsuario2);
    }

    // 2. Obtén la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios
    public function pedidosConUsuarios()
    {
        $pedidosConUsuarios = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
            ->get();
        return response()->json($pedidosConUsuarios);
    }

    // 3. Recupera todos los pedidos cuyo total esté en el rango de $100 a $250
    public function pedidosRango()
    {
        $pedidosRango = DB::table('pedidos')->whereBetween('total', [100, 250])->get();
        return response()->json($pedidosRango);
    }

    // 4. Encuentra todos los usuarios cuyos nombres comiencen con la letra "R"
    public function usuariosR()
    {
        $usuariosR = DB::table('usuarios')->where('nombre', 'like', 'R%')->get();
        return response()->json($usuariosR);
    }

    // 5. Calcula el total de registros en la tabla de pedidos para el usuario con ID 5
    public function totalPedidosUsuario5()
    {
        $totalPedidosUsuario5 = DB::table('pedidos')->where('usuario_id', 5)->count();
        return response()->json(['total_pedidos' => $totalPedidosUsuario5]);
    }

    // 6. Recupera todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido
    public function pedidosOrdenados()
    {
        $pedidosOrdenados = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
            ->orderBy('pedidos.total', 'desc')
            ->get();
        return response()->json($pedidosOrdenados);
    }

    // 7. Obtén la suma total del campo "total" en la tabla de pedidos
    public function sumaTotalPedidos()
    {
        $sumaTotalPedidos = DB::table('pedidos')->sum('total');
        return response()->json(['suma_total' => $sumaTotalPedidos]);
    }

    // 8. Encuentra el pedido más económico, junto con el nombre del usuario asociado
    public function pedidoMasBarato()
    {
        $pedidoMasBarato = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select('pedidos.*', 'usuarios.nombre')
            ->orderBy('pedidos.total', 'asc')
            ->first();
        return response()->json($pedidoMasBarato);
    }

    // 9. Obtén el producto, la cantidad y el total de cada pedido, agrupándolos por usuario
    public function pedidosAgrupadosPorUsuario()
    {
        $pedidosAgrupadosPorUsuario = DB::table('pedidos')
            ->join('usuarios', 'pedidos.usuario_id', '=', 'usuarios.id')
            ->select('usuarios.nombre', 'pedidos.cantidad', 'pedidos.total')
            ->orderBy('usuarios.nombre')
            ->get();
        return response()->json($pedidosAgrupadosPorUsuario);
    }
}

