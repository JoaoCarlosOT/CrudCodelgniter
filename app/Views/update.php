<form action="<?= url_to('post.update', $post['id']); ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= esc($post['title']); ?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="<?= esc($post['description']); ?>">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

