@extends('layout.layout')
@section('title','Pedidos')

    @section('conteudo')
        <h1 class="display-5">Adicionar Pedido</h1>
        <form class="row row-cols-lg-auto g-3 align-items-center bg-dark pb-3 mt-2" action="{{route('pedido.salvar')}}" method="post">
            @csrf
            @include('pedidos.form')

            <button type="submit" class="btn btn-secondary bg-yellow">Salvar</button>
        </div>
        </form>
        
    
    @endsection
