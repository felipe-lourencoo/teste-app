<div class="col-12">
  <select class="form-select" id='idCliente' name="idCliente">
      <option selected value="{{isset($cliente_->id) ? $cliente_->id : ""}}">{{isset($pedido->idCliente) ?  $cliente_->name : "Cliente..."}}</option>

        @foreach ($clientes as $cliente){}
            <option value="{{$cliente->id}}">{{$cliente->name}}</option>
        @endforeach
</select>
</div>
<div class="col-12">
  <select class="form-select" id='idProduto' name="idProduto">
      <option selected value="{{isset($produto_->id) ? $produto_->id : ""}}">{{isset($pedido->idProduto) ?  $produto_->name  : "Produto..."}}</option>

        @foreach ($produtos as $produto){}
            <option value="{{$produto->id}}">{{$produto->name}}</option>
        @endforeach
</select>
</div>
<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Quantidade</div>
    <input type="number" class="form-control" name="amount" value="{{isset($pedido->amount) ? $pedido->amount : "0"}}">
  </div>
</div>
<div class="col-12">
  <select class="form-select"´id='city' name="city">
      <option selected>{{isset($pedido->city) ?  $pedido->city : "Cidade..."}}</option>
      <option value="São Paulo">São Paulo</option>
      <option value="Campinas">Campinas </option>
      <option value="São Bernardo do Campo">São Bernardo do Campo</option>
      <option value="Santos">Santos</option>
  </select>  
</div>
