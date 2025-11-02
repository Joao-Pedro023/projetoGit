<?php 
session_start();
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = array();
}

if (isset($_POST['nome']) && isset($_POST['senha'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (isset($_SESSION['conta'][$nome]) && $_SESSION['conta'][$nome]['senha'] == $senha) {
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header("Location: home.php");
        exit();
        } else { echo 'conta não existe ou senha incorreta'; }
} else {
    echo 'Preencha toos os dados';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <p>
    <form action="entrar.php" method="POST">
        <label for="Nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="Senha">Senha</label>
        <input type="text" name="senha" id="senha">
        <button type="submit">Enviar</button>
    </form>
    </p>
    <p><a href="cadastro.php">Criar conta</a></p>
</body>
</html>