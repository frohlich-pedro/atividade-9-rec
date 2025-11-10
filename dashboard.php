<?php
include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Biblioteca</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .logout { background: #dc3545; color: white; padding: 8px 16px; text-decoration: none; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard - Biblioteca</h1>
        <a href="logout.php" class="logout">Sair</a>
    </div>
    
    <p>Bem-vindo, <strong><?php echo $_SESSION['username']; ?></strong>!</p>
    
    <h2>Sistema de Biblioteca</h2>
    <ul>
        <li>Livros cadastrados: 150</li>
        <li>Empréstimos ativos: 23</li>
        <li>Usuários cadastrados: 89</li>
    </ul>
</body>
</html>
