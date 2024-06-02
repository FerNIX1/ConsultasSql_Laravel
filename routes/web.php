<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pedidos-usuario-2', [ConsultaController::class, 'pedidosUsuario2']);
Route::get('/pedidos-con-usuarios', [ConsultaController::class, 'pedidosConUsuarios']);
Route::get('/pedidos-rango', [ConsultaController::class, 'pedidosRango']);
Route::get('/usuarios-r', [ConsultaController::class, 'usuariosR']);
Route::get('/total-pedidos-usuario-5', [ConsultaController::class, 'totalPedidosUsuario5']);
Route::get('/pedidos-ordenados', [ConsultaController::class, 'pedidosOrdenados']);
Route::get('/suma-total-pedidos', [ConsultaController::class, 'sumaTotalPedidos']);
Route::get('/pedido-mas-barato', [ConsultaController::class, 'pedidoMasBarato']);
Route::get('/pedidos-agrupados-por-usuario', [ConsultaController::class, 'pedidosAgrupadosPorUsuario']);
