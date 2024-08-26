<?php if(session()->has('message')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">clientes</th>
      <th scope="col">empresa</th>
      <th scope="col">email</th>
      <th scope="col">telefone</th>
      <th scope="col">cpf-cnpj</th>
      <th scope="col" colspan="3">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($clientes) && is_array($clientes)): ?>
      <?php foreach($clientes as $cliente): ?>
        <tr>
          <td><?= esc($cliente['cliente']); ?></td>
          <td><?= esc($cliente['empresa']); ?></td>
          <td><?= esc($cliente['email']); ?></td>
          <td><?= esc($cliente['telefone']); ?></td>
          <td><?= esc($cliente['cpf_cnpj']); ?></td>
          <td><a href="<?= url_to('cliente.edit', $cliente['id']); ?>" class="btn btn-primary">Atualizar</a></td>
          <td><a href="<?= url_to('cliente.details', $cliente['id']); ?>" class="btn btn-info">Detalhes</a></td>
          <td>
            <form action="<?= url_to('cliente.delete', $cliente['id']); ?>" method="post" style="display:inline;">
              <?= csrf_field(); ?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="4">Nenhum usuário encontrado</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
