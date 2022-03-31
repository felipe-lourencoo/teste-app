<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Pedido;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view ('clientes.index', compact('clientes'));
    }

    public function show($id){
        $cliente = Cliente::find($id);
        $pedidos = Pedido::with('cliente', 'produto')->where( 'idCliente', '=', $id )->get();
        return view ('clientes.show', compact('pedidos', 'cliente'));
    }

    public function create(){
        return view ('clientes.create');
    }

    public function save(Request $req){
        $dados = $req -> all();
        Cliente::create($dados);
        return redirect()->route('clientes.lista');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',compact('cliente'));
    }

    public function update($id, Request $req){
        $dados = $req -> all();
        Cliente::find($id)->update($dados);
        return redirect()->route('clientes.lista');
    }
    
    public function delete($id){
        Cliente::find($id)->delete();
        return redirect()->route('clientes.lista');
    }
}
