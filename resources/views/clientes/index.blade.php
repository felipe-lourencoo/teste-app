@extends('layout.layout')
@section('title','Clientes')

    @section('conteudo')
        
        <h1 class="display-5">Clientes</h1>
        <div class="btn-group mb-1" role="group" aria-label="Basic example">
            <a type="button" class="btn btn-secondary bg-yellow"href="{{route('cliente.criar')}}">Adicionar </a></td>
        </div>

        <div class="row">

            <table class="table table-bordered table-dark text-yellow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cidade</th>
                        <th>Idade</th>
                        <th>Ação</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->name}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->city}}</td>
                            <td>{{$cliente->age}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-secondary text-yellow"href="{{route('cliente.ver',$cliente->id)}}">Ver </a>
                                    <a type="button" class="btn btn-secondary text-yellow" href="{{route('cliente.editar',$cliente->id)}}">Editar </a>
                                    <a type="button" class="btn btn-secondary text-yellow"href="{{route('cliente.deletar',$cliente->id)}}">Deletar </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    @endsection