@extends('layout.layout')
@section('title','Produtos')

    @section('conteudo')
        <h1 class="display-5">Editar Produto</h1>
        <form class="row row-cols-lg-auto g-3 align-items-center bg-dark pb-3 mt-2" action="{{route('produto.atualizar', $produto->id)}}" method="post">
            @csrf
            @method('PUT')
            @include('produtos.form')

            <button type="submit" class="btn btn-secondary bg-yellow">Atualizar</button>
        </div>
        </form>
        
    
    @endsection
