<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Nome</div>
    <input type="text" class="form-control" name="name" value="{{isset($produto->name) ? $produto->name : ""}}">
  </div>
</div>


<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Valor   R$</div>
    <input type="value" class="form-control" name="value" value="{{isset($produto->value) ? ''.$produto->value : ""}}">
  </div>
</div>



