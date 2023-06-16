<?php
  session_start(); # armazenar o nome no session
$nome="";
    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];

    $nome = $_POST["nome"];

    $_SESSION['nome'] = $nome;}


  $confirmacao=false;

  //basicamente a msm logica do botao de responder/proximo da pag principal
  if(isset($_POST["confirmar"])){
    $confirmacao=true;}
?>
<!--pagina onde eu coloquei uma breve descricao do funcionnamento do quiz-->
<a href="instrucoes.PHP"><button>INSTRUÇÕES</button></a>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet1.css">
    <script src="Script.js"></script> 
    <title>Steven Universo Quiz</title>
</head>
<body>
  <div id="page-container">
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
              <span></span>
              <span></span>
              <span></span>
 </div>
      </div>
  </div>
<div id="page">

<header>
<div class="parent">
  <div class="title">
      <img  src="https://vignette2.wikia.nocookie.net/steven-universe/images/e/e0/Steven_Universe_logo.png/revision/latest?cb=20131006122342" width="600px"/>
    </div>
</header>
<div id="content-wrap">
<main>
  <div class="grid2">
  <div class="textbox">
 <form class="colorful-form" action="home.php" method="post">
  <div class="form-group">
    <label class="form-label" for="name">Nome:</label>

  
  </div>
  <?php 
        //logica dos botoes dnv
  
  if(!$confirmacao){
    echo '<input placeholder="Escolha seu melhor apelido!" class="form-input" type="text" name="nome">';
        echo ' <button class="form-button" type="submit" name="confirmar">Confirmar</button>'; } ?>


    <?php if($confirmacao){
      echo '<input placeholder="Seu nome foi registrado" class="form-input" type="text" name="nome" disabled>';
       echo '<button class="form-button" name="proximo"><a href="unipag.php">começar</button></a>';}
   
        ?>
 
</form>


  

</div>
</div>

</main>
</div>


<footer id="footer">

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
</footer>

    </body>
