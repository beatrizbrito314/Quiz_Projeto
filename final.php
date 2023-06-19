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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet2.css">
    <script src="Script.js"> </script>
    <title>Resultados</title>
</head>
<body>


<div class="parent">
    <header id="pageHead">

  <div class="title">
      <img  src="https://vignette2.wikia.nocookie.net/steven-universe/images/e/e0/Steven_Universe_logo.png/revision/latest?cb=20131006122342" width="600px"/>
  </div>
</div>
</header>
    <main id="pageMain">
    <div class="grid2">
<!--esse session é para exibir o nome do jogador -->
    <div class="container1"> <h1>Parabéns, <?php  echo $_SESSION['nome'] ?> !!! </h1>
    <h1>Você finalizou o quiz com um total de <?php echo $quant_acerto ?> de 10 acertos.</h1></div>
    <div class="container2">
<p>Seu total de biscoitos, aproveite:
<?php echo $_SESSION['ponto']; 
?> </p> </div>
<div class="container3">
<p>Porcentagem de acertos <?php echo $por_acerto."%"; ?> </p></div>
<div class="container4">
<h2>Agora seus biscoitos gatinhos servirão para descobrir os poderes de qual a sua gem!
  </h2>
  <div align="center">
  <a href="#popUp" id="openPopUp">Qual a minha Gem?</a> 
</div>
<!--p saber qual gem o usuario recebe-rá-->
<aside id="popUp" class="popup">
    <div class="popUpContainer">
        <a href="#!" class="closePopUp">X</a>
        <h1>
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
</h2>
<?Php echo $gem; ?>
<?Php echo $gemgif; ?>
</article>
   </div>        
   <a href="#!" class="closePopUpOutSide"></a>    
</aside>
</div>
<br>
<br>
<a href="home.php"><button>JOGAR NOVAMENTE</button></a>
</main>

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/HD_transparent_picture.png/1280px-HD_transparent_picture.png">


<footer id="pageFoot">
<div class="ftgrid"> 

 <div class="groupcontent">
  Desenvolvedoras: 
    <div class="Name1">      Emilly Beatriz Andrade Brito </div>
    <div class="Name2"> Francilene F. de Oliveira </div>
    <div class="Name3"> Letícia Matias Rosendo  </div>
 </div>
 <div class="infocontent">
  <div class="Info1"> Trabalho para a disciplina de Programação para a internet </div>
    <div class="Info2"> Professor: Éberton Marinho </div>
    <div class="Info3"> Unidade 1 </div>
 </div>
</div>
</div>
</footer>
</div>
</body>

</html>