<?php if(session()->has('message')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col" colspan="3">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php if (!empty($posts) && is_array($posts)): ?>
      <?php foreach($posts as $post): ?>
        <tr>
          <td><?= esc($post['title']); ?></td>
          <td><?= esc($post['description']); ?></td>
          <td><a href="<?= url_to('post.edit', $post['id']); ?>" class="btn btn-primary">Atualizar</a></td>
          <td><a href="<?= url_to('post.details', $post['id']); ?>" class="btn btn-info">Detalhes</a></td>
          <td>
            <form action="<?= url_to('post.delete', $post['id']); ?>" method="post" style="display:inline;">
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
