<?php
  session_start(); # Deve ser a primeira linha do arquivo
$nome="";
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];

    $nome = $_POST["nome"];

    $_SESSION['nome'] = $nome;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="home.php" method="post">
<td><label for="lb1" >Informe seu nome: </td>
<input type="text" name="nome">

    <td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>
<a href="questao1.php"><button> Continue </button></a>
</body>
</html>