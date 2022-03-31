<?php

namespace App\Http\Controllers;

use illuminate\Support\Facades;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Produto;


class PedidosController extends Controller
{
    public function index(){

        $pedidos = Pedido::with('cliente', 'produto')->get();
        return view ('pedidos.index', compact('pedidos'));
    }

    public function create(){
        $clientes = Cliente::all();
        $produtos = Produto::all();
        return view ('pedidos.create',compact('clientes','produtos'));


    }

    public function home(){

        $pedidos = Pedido::with('cliente', 'produto')->get();
        return view ('home', compact('pedidos'));
    }

    public function save(Request $req){
        


        $value = Produto::find($req->idProduto)->value * $req->amount;
        $dados = $req -> all();
        $dados['value'] = $value;


        Pedido::create($dados);
        return redirect()->route('pedidos.lista');
    }

    public function edit($id){

        $pedido = Pedido::find($id);
        $cliente_ = Cliente::find($pedido->idCliente);
        $clientes = Cliente::all();
        $produto_ = Produto::find($pedido->idProduto);
        $produtos = Produto::all();

        return view('pedidos.edit', compact('cliente_', 'clientes', 'pedido','produto_','produtos'));

    }

    public function update($id, Request $req){

        $value = Produto::find($req->idProduto)->value * $req->amount;
        $dados = $req -> all();
        $dados['value'] = $value;


        Pedido::find($id)->update($dados);
        return redirect()->route('pedidos.lista');
    }
    
    public function delete($id){
        Pedido::find($id)->delete();
        return redirect()->route('pedidos.lista');
    }
}
