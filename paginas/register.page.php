<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="../css/styles.css">

    <title>Cadastro</title>
</head>
<body>

<div class="card">

    <div class="card-img">
        <img width="150px" src="../img/mario_login.png" alt="">
    </div>

    <div class="card-body">
        <h4>- CADASTRO</h4>
        <form action="/methods/processar_registro.php" method="POST">
            <input class="input-form" type="text" name="name" placeholder="Nome" required>
            <input class="input-form" type="email" name="email" placeholder="Email" required>

            <input class="input-form" type="password" name="password" placeholder="Senha" required>
            <input class="input-form" type="password" name="password_confirm" placeholder="Confirme a Senha" required>

            <button class="btn" type="submit">Cadastrar</button>
        </form>
    </div>

    <div class="card-footer">
        <small>Já possui uma conta?</small>
        <a href="login.php">Acessar</a>
    </div>
</div>

</body>
</html>
