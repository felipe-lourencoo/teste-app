@extends('layout.layout')
@section('title','Produtos')

    @section('conteudo')
        
        <h1 class="display-5">Produtos</h1>
        <div class="btn-group mb-1" role="group" aria-label="Basic example">
            <a type="button" class="btn btn-secondary bg-yellow"href="{{route('produto.criar')}}">Adicionar </a></td>
        </div>

        <div class="row">

            <table class="table table-bordered table-dark text-yellow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->name}}</td>
                            <td>R${{$produto->value}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-secondary text-yellow"href="{{route('produto.ver',$produto->id)}}">Ver </a>
                                    <a type="button" class="btn btn-secondary text-yellow" href="{{route('produto.editar',$produto->id)}}">Editar </a>
                                    <a type="button" class="btn btn-secondary text-yellow"href="{{route('produto.deletar',$produto->id)}}">Deletar </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    @endsection