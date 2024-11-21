<?php
$host = 'localhost';
$dbname = 'pratica_2';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}

$sql = "SELECT * FROM Solicitações";
$stmt = $pdo->query($sql);
$solicitacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Solicitações</title>
</head>
<body>
    <h2>Solicitações</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Descrição</th>
                <th>Urgência</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacoes as $solicitacao): ?>
            <tr>
                <td><?php echo $solicitacao['id_solicitacao']; ?></td>
                <td><?php echo $solicitacao['id_cliente']; ?></td>
                <td><?php echo $solicitacao['descricao']; ?></td>
                <td><?php echo $solicitacao['urgencia']; ?></td>
                <td><?php echo $solicitacao['status']; ?></td>
                <td>
                    <a href="atualizar_status.php?id=<?php echo $solicitacao['id_solicitacao']; ?>">Atualizar Status</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>