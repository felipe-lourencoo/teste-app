<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', [PedidosController::class, 'home'])->name('home');

Route::get('clientes/', [ ClientesController::class, 'index'])->name('clientes.lista'); /*                   Clientes _________________________________Inicio*/
Route::get('clientes/ver/{id}', [ClientesController::class, 'show'])->name('cliente.ver');
Route::get('clientes/criar', [ClientesController::class, 'create'])->name('cliente.criar');
Route::post('clientes/salvar', [ClientesController::class, 'save'])->name('cliente.salvar');
Route::get('clientes/editar/{id}', [ClientesController::class, 'edit'])->name('cliente.editar');
Route::put('clientes/atualizar/{id}', [ClientesController::class, 'update'])->name('cliente.atualizar');
Route::get('clientes/deletar/{id}', [ClientesController::class, 'delete'])->name('cliente.deletar');/*       Clientes ____________________________________Fim*/


Route::get('produtos/', [ProdutosController::class, 'index'])->name('produtos.lista');/*                      Produtos _________________________________Inicio*/
Route::get('produtos/ver/{id}', [ProdutosController::class, 'show'])->name('produto.ver');
Route::get('produtos/criar', [ProdutosController::class, 'create'])->name('produto.criar');
Route::post('produtos/salvar', [ProdutosController::class, 'save'])->name('produto.salvar');
Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit'])->name('produto.editar');
Route::put('produtos/atualizar/{id}', [ProdutosController::class, 'update'])->name('produto.atualizar');
Route::get('produtos/deletar/{id}', [ProdutosController::class, 'delete'])->name('produto.deletar');/*        Produtos ____________________________________Fim*/


Route::get('pedidos/', [PedidosController::class, 'index'])->name('pedidos.lista');/*                      Pedidos __________________________________Inicio*/
Route::get('pedidos/criar', [PedidosController::class, 'create'])->name('pedido.criar');
Route::post('pedidos/salvar', [PedidosController::class, 'save'])->name('pedido.salvar');
Route::get('pedidos/editar/{id}', [PedidosController::class, 'edit'])->name('pedido.editar');
Route::put('pedidos/atualizar/{id}', [PedidosController::class, 'update'])->name('pedido.atualizar');
Route::get('pedidos/delete/{id}', [PedidosController::class, 'delete'])->name('pedido.deletar');/*           Pedidos _____________________________________Fim*/