<?php
session_start();

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = array();
}
if($_SESSION['nome'] && $_SESSION['senha']){
    $nome = $_SESSION['nome'];
    $senha = $_SESSION['senha'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>

    <h4>
    <?php
    if ($_SESSION['nome']){
        echo "Seja bem vindo " . $nome."<br>".'    <a href="entrar.php">Sair da conta</a>';
    } else {
        echo 'Para mais funções, entre na sua conta <a href="entrar.php">aqui</a> ';
    }
    ?>
    </h4>



<?php
echo "<h3>Usuários cadastrados:</h3>";
foreach ($_SESSION['conta'] as $usuario) {
    echo "Nome: " . $usuario['nome'] . "<br>";
}
?>
    

    
</body>
</html>