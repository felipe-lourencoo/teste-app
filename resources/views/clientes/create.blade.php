@extends('layout.layout')
@section('title','Clientes')

    @section('conteudo')
        <h1 class="display-5">Adicionar Cliente</h1>
        <form class="row row-cols-lg-auto g-3 align-items-center bg-dark pb-3 mt-2" action="{{route('cliente.salvar')}}" method="post">
            @csrf
            @include('clientes.form')

            <button type="submit" class="btn btn-secondary bg-yellow">Salvar</button>
        </div>
        </form>
        
    
    @endsection
