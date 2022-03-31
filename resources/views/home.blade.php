@extends('layout.layout')
@section('title','Home')
    
    @section('conteudo')
    <div class="container">
        <h1 class="display-5">Home</h1>
    </div>
        <h2>Pedidos</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Cliente</th>
                <th scope="col">Produto</th>
                <th scope="col">Cidade</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->id}}</td>
                    <td>{{$pedido->cliente->name}}</td>
                    <td>{{$pedido->produto->name}}</td>
                    <td>{{$pedido->city}}</td>
                    <td>{{$pedido->amount}}</td>
                    <td>R${{$pedido->value}}</td>
                </tr>

                    @endforeach
            </tbody>
          </table>
        </div>
      </main>

    


    @endsection