
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("arrays.php")
    ?>
<?php
    session_start();

    echo "Jogador: ".$_SESSION['nome'];
?>
<h1><?php echo($perguntas[2])?></h1>

<form action="questao7.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[6][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[6][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[6][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[6][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

<a href="questao8.php"><button>Continue</button></a>
</body>
</html>