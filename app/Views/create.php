
<form action="<?php echo url_to('cliente.store'); ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cliente">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empresa</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="empresa">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">telefone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="telefone">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cpf-cnpj</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf_cnpj">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>