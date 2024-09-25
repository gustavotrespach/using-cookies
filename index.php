<?php

if(isset($_POST['nome'])){
    $venc = time() + (30 * 24 * 60 * 60); //Setando uma variavel com a data de vencimento do cookie
    setcookie("nome", $_POST['nome'], $venc);
    header("Location: boasvindas.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form method="post" action="">
        <p>Qual o seu nome?</p>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>