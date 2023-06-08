<?php


session_start();

// Verifique se o usuário está autenticado. Caso contrário, redirecione para a página de login
if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}
?>

<html>
<head>
    <title>Página Inicial</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Esta é a página inicial restrita.</p>
    <a href="logout.php">Sair</a>
</body>
</html
