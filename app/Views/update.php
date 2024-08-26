<form action="<?= url_to('cliente.update', $clientes['id']); ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cliente" value="<?= esc($clientes['cliente']); ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">empresa</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="empresa" value="<?= esc($clientes['empresa']); ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= esc($clientes['email']); ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">telefone</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" name="telefone" value="<?= esc($clientes['telefone']); ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cpf-cnpj</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf_cnpj" value="<?= esc($clientes['cpf_cnpj']); ?>">
  </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

