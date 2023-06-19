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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet1.css">
    <script src="Script.js"> </script> 
    <title>Steven Universo Quiz</title>
</head>
<body>
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
</div>
</header>
<main>
  <div class="parent">
  <div class="box">
    <div class="boxgrid">
      <div class="textbox">
        <form class="colorful-form" action="home.php" method="post">
          <div class="form-group">
            <label class="form-label" for="name">Nome:</label>
                <input required="" placeholder="Escolha seu melhor apelido!" class="form-input" type="text">
                 <button class="form-button" type="submit"><a href="unipag.php">começar</button></a>
                <!--
              <?php 
        //logica dos botoes dnv
  
                if(!$confirmacao){
                  echo '<input placeholder="Escolha seu melhor apelido!"  class="form-input" type="text" name="nome">';
                  echo ' <button class="form-button" type="submit" name="confirmar">Confirmar</button>'; } ?>


                <?php if($confirmacao){
                  echo '<input placeholder="Seu nome foi registrado" class="form-input" type="text" name="nome" disabled>';
                  echo '<button class="form-button" name="proximo"><a href="unipag.php">começar</button></a>';}
              ?>
 -->
              </form>
          </div>
      </div>
     
  <a href="#popUp" id="openPopUp">Instruções</a> 

  
<!-- POP UP -->
<aside id="popUp" class="popup">
    <div class="popUpContainer">
       <header>
        <a href="#!" class="closePopUp">X</a>
        <h2>Como funciona? </h2>
 
       </header>
      <article>
         <h3>O quiz possui um total de 10 questões, 
    ao acertar uma questão você recebe-rá 5 biscoitos gatinhos.
    No final do quiz, você receberá as habilidades/poderes de uma gem 
    de acordo com a sua quantidade de biscitos gatinho.</h3>
    <h2>Divirta-se!!!</h2>
      </article>
   </div>        
   <a href="#!" class="closePopUpOutSide"></a>    
</aside>

</main>

<br>

 

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
</div>
      </div>
    </div>
  </div>
 </div>
</div>
</div>
   </body>
