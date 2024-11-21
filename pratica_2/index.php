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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Solicitações</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 20px 0;
        }
        nav a {
            padding: 10px 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #45a049;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Sistema de Gerenciamento de Solicitações</h1>
        
        <nav>
            <a href="cadastro_cliente.php">Cadastrar Cliente</a>
            <a href="cadastro_solicitacao.php">Cadastrar as Solicitações</a>
            <a href="solicitacoes.php">Visualizar Solicitações</a>
            <a href="atualizar_status.php">Atualizar Status</a>
        </nav>
    </div>
</body>
</html>