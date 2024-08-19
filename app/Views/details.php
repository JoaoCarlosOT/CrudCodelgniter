<h1>Detalhes do Post</h1>

<?php if ($post): ?>
    <p><strong>Title:</strong> <?= esc($post['title']); ?></p>
    <p><strong>Description:</strong> <?= esc($post['description']); ?></p>
<?php else: ?>
    <p>Post não encontrado.</p>
<?php endif; ?>