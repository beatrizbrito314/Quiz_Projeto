<?php
//sessão p chamar os valores de nome e pontos 
session_start();
$quant_acerto=' ';

//como cada ponto vale 5 entao a quantidade de acertos é a quantidade de pontos dividida p 5
$quant_acerto= ($_SESSION['ponto'])/5;

$por_acerto= ($quant_acerto*100)/10; //porcentagem de acertos

$gem='';
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

<!--esse session é para exibir o nome do jogador -->
    <h1>Parabéns, <?php  echo $_SESSION['nome'] ?> !!! </h1>
    <h2>Você finalizou o quiz com um total de <?php echo $quant_acerto ?> de 10 acertos.</h2>

<h4>Seu total de biscoitos, aproveite:</h4>
<?php echo $_SESSION['ponto']; 
?>
<br>
<h4>Porcentagem de acertos</h4>
<?php echo $por_acerto."%"; ?>

<h2></h2>
<!--p saber qual gem o usuario recebe-rá-->
<?php if($quant_acerto>=1 && $quant_acerto<=2 ){
    $gem="Parabéns, você teria os poderes de uma Agata Azul!";
    
}
if($quant_acerto>=3 && $quant_acerto<=4 ){
    $gem="Parabéns, você teria os poderes de uma Topazio!";
}
if($quant_acerto>=5 && $quant_acerto<=6 ){
    $gem="Parabéns, você teria os poderes de uma Amestista!";
}
if($quant_acerto>=7 && $quant_acerto<=8 ){
    $gem="Parabéns, você teria os poderes de uma Safira!";
}
if($quant_acerto>=9 && $quant_acerto<=10 ){
    $gem= "Parabéns, você teria os poderes de uma Peridoto!";
}
echo $gem;
?>


<br>
<br>
<a href="home.php"><button>JOGAR NOVAMENTE</button></a>
</body>
</html>