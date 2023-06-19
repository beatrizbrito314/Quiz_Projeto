<?php
//sessão p chamar os valores de nome e pontos 
session_start();
$quant_acerto=' ';

//como cada ponto vale 5 entao a quantidade de acertos é a quantidade de pontos dividida p 5
$quant_acerto= ($_SESSION['ponto'])/5;

$por_acerto= ($quant_acerto*100)/10; //porcentagem de acertos

$gem='';
$gemgif='';
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

<h2>Agora seus biscoitos gatinhos servirão para descobrir os poderes de qual  gem você terá.
  
</h2>
<!--p saber qual gem o usuario recebe-rá-->
<?php 




if($quant_acerto==1){
    $gem="Parabéns, você recebeu os poderes de uma Agata Azul!"; 
    $gemgif='<img src= "https://pa1.aminoapps.com/6789/7ad7332f6482bd53e87d67ad5f3e0e3d0f16324b_00.gif">';


}
if($quant_acerto==2){
    $gem="Parabéns, você recebeu os poderes de uma Rubi!";
    $gemgif='<img src= "https://i.pinimg.com/originals/bd/fe/75/bdfe75dad3891b367365c1315785310a.gif">';
   
}
if($quant_acerto==3){
    $gem="Parabéns, você recebeu os poderes de uma aquamarine!";
    $gemgif='<img src= "https://media.tenor.com/KbQBgR-Ha4YAAAAC/aquamarine-steven-universe.gif">';
   
}
if($quant_acerto==4){
    $gem="Parabéns, você recebeu os poderes de uma Peridot!";
    $gemgif='<img src= "https://media.tenor.com/GitBQnF1_RoAAAAM/peridot-steven-universe.gif">';
   
}
if($quant_acerto==5){
    $gem="Parabéns, você recebeu os poderes de uma Ametista!";   
    $gemgif='<img src= "https://i.pinimg.com/originals/1e/db/4a/1edb4a4662830b106fb18d97e3f941e8.gif">';
}
if($quant_acerto==6){
    $gem="Parabéns, você recebeu os poderes de uma Safira!"; 
    $gemgif='<img src= "https://i.pinimg.com/originals/8e/7d/f2/8e7df28495898a60f81fea72f891a4df.gif">';  
}
if($quant_acerto==7){
    $gem="Parabéns, você recebeu os poderes de uma Lapís lazuli!";   
    $gemgif='<img src= "https://i.pinimg.com/originals/95/14/1b/95141bb6a60e66d01623ecb2bb6a22a1.gif">';
}
if($quant_acerto==8){
    $gem="Parabéns, você recebeu os poderes de uma Bismuto!";   
    $gemgif='<img src= "https://66.media.tumblr.com/20b65873a15755f89b43879201321fc2/tumblr_obequ2bA751vnokczo1_500.gif">';
}
if($quant_acerto==9){
    $gem="Parabéns, você recebeu os poderes de uma Pérola!";   
    $gemgif='<img src= "https://i.pinimg.com/originals/85/6d/9b/856d9b3b920d22fcd33f9a5601a0c971.gif">';
}
if($quant_acerto==10){
    $gem="Parabéns, você recebeu os poderes de uma Diamante!";   
    $gemgif='<img src= "https://i.pinimg.com/originals/57/40/3e/57403efa2ff77f46751b5404dd32e0bb.gif">';
}

?>
<?Php echo $gem; ?>
<br>
<br>
<?Php echo $gemgif; ?>

<br>
<br>
<a href="home.php"><button>JOGAR NOVAMENTE</button></a>
</body>

</html>