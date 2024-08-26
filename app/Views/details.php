<h1>Detalhes do Cliente</h1>

<?php if ($clientes): ?>
    <p><strong>cliente:</strong> <?php echo esc($clientes['cliente']); ?></p>
    <p><strong>empresa:</strong> <?php echo esc($clientes['empresa']); ?></p>
    <p><strong>email:</strong> <?php echo esc($clientes['email']); ?></p>
    <p><strong>telefone:</strong> <?php echo esc($clientes['telefone']); ?></p>
    <p><strong>cpf_cnpj:</strong> <?php echo esc($clientes['cpf_cnpj']); ?></p>
<?php else: ?>
    <p>Cliente não encontrado.</p>
<?php endif; ?>
