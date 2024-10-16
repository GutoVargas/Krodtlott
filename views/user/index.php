<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h2>Usuários</h2>
    <a href="./public/index.php?action=create">Adicionar Usuário</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="./public/index.php?action=edit&id=<?php echo $user['id']; ?>">Editar</a>
                    <a href="./public/index.php?action=delete&id=<?php echo $user['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>