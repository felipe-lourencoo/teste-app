
@extends('layout.layout')
@section('title','Detalhes')

    @section('conteudo')
        
        <h1 class="display-5">Pedidos de {{$produto->name}}</h1>
        <div class="btn-group mb-1" role="group" aria-label="Basic example">
            <a type="button" class="btn btn-secondary bg-yellow"href="{{route('produtos.lista')}}">Voltar </a></td>
        </div>

        <div class="row">

            <table class="table table-bordered table-dark text-yellow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do cliente</th>
                        <th>Cidade</th>
                        <th>Quantidade</th>
                        <th>Valor total</th>
                        <th>Data de criação</th>
                        <th>Ação</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->cliente->name}}</td>
                            <td>{{$pedido->city}}</td>
                            <td>{{$pedido->amount}}</td>
                            <td>R${{$pedido->value}}</td>
                            <td>{{$pedido->created_at}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-secondary text-yellow" href="{{route('pedido.editar',$pedido->id)}}">Editar </a>
                                    <a type="button" class="btn btn-secondary text-yellow"href="{{route('pedido.deletar',$pedido->id)}}">Deletar </a>
                                </div>
                            </td>
                            
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        
    @endsection