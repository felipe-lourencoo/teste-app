<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Pedido;

class ProdutosController extends Controller
{
    public function index(){

        $produtos = Produto::all();
        return view ('produtos.index', compact('produtos'));
    }

    public function show($id){
        $produto = Produto::find($id);
        $pedidos = Pedido::with('produto', 'produto')->where( 'idProduto', '=', $id )->get();
        return view ('produtos.show', compact('pedidos', 'produto'));
    }

    public function create(){
        
        return view ('produtos.create');

    }

    public function save(Request $req){

        $dados = $req -> all();
        Produto::create($dados);
        return redirect()->route('produtos.lista');
    }

    public function edit($id){

        $produto = Produto::find($id);
        return view('produtos.edit',compact('produto'));

    }

    public function update($id, Request $req){
        
        $dados = $req -> all();
        Produto::find($id)->update($dados);
        return redirect()->route('produtos.lista');
    }
    
    public function delete($id){
        Produto::find($id)->delete();
        return redirect()->route('produtos.lista');
    }
}
