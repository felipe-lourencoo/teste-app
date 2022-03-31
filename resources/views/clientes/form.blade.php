<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Nome</div>
    <input type="text" class="form-control" name="name" value="{{isset($cliente->name) ? $cliente->name : ""}}">
  </div>
</div>


<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Email</div>
    <input type="email" class="form-control" name="email" value="{{isset($cliente->email) ? $cliente->email : ""}}">
  </div>
</div>

<div class="col-12">
  <div class="input-group">
    <div class="input-group-text">Idade</div>
    <input type="number" class="form-control" name="age" value="{{isset($cliente->age) ? $cliente->age : "0"}}">
  </div>
</div>
<div class="col-12">
  <select class="form-select"´id='city' name="city">
      <option selected>{{isset($cliente->city) ?  $cliente->city . "  _salvo" : "Cidade..."}}</option>
      <option value="São Paulo">São Paulo</option>
      <option value="Campinas">Campinas </option>
      <option value="São Bernardo do Campo">São Bernardo do Campo</option>
      <option value="Santos">Santos</option>
</select>
</div>

