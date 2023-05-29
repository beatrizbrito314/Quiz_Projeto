<?php

session_start();

if(isset($_POST['Proximo1'])){
    $_SESSION["v1"] = "xx";
    $_SESSION['refeicao'] = $_POST['refeicao'];
}
if(isset($_POST['Proximo2'])){
    $_SESSION["v2"] = "xx";
    $_SESSION['refeicao1'] = $_POST['refeicao1'];
}
$res="";
$posicao=rand(0,3);
$perguntas= array ("pergunta 1", "pergunta 2","pergunta 3", "pergunta 4", "pergunta 5","pergunta 6", "pergunta 2","pergunta 7", "pergunta 8", "pergunta 9", "pergunta 10");
$respostas= array(
//pergunta 1
array ("a1","a2","a3","a4"),
//pergunta 2
array ("a1","a2","a3","a4"),
//pergunta 3
array ("a1","a2","a3","a4"),
//pergunta 4
array ("a1","a2","a3","a4"),
//pergunta 5
array ("a1","a2","a3","a4"),
//pergunta 6
array ("a1","a2","a3","a4"),
//pergunta 7
array ("a1","a2","a3","a4"),
//pergunta 8
array ("a1","a2","a3","a4"),
//pergunta 9
array ("a1","a2","a3","a4"),
//pergunta 10
array ("a1","a2","a3","a4")
);

if(isset($_POST["calcular"])){
    $botao = $_POST["calcular"];

    if(isset($_POST["res"])){
        $res = $_POST["res"];}

if($res=="1"){
echo ("Correto");
}else{
    echo ("incorreto");
}
}
else{
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

section {
  width: 100vw;
  height: 100vh;
  overflow-y: auto;
}

h1 {
  margin-top: 0;
}
</style>
</head>
<body>
    

<section id="page-1" style="background-color: aquamarine">
  <h1>Página 1</h1>
  <a href="#page-2">Próxima</a>
  <?php
    include("arrays.php")
?>



<h1><?php echo($perguntas[0])?></h1>

<form action="questao1.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[0][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[0][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[0][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[0][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>
  <a href="#page-2">Próxima</a>
</section> 

<div class="1" style="background-color: blue">
<section id="page-2">
  <h1>Página 2</h1>
  <a href="#page-1">Anterior</a>
  <a href="#page-3">Próxima</a>
 

<h1><?php echo($perguntas[2])?></h1>
<form action="questao2.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[1][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[1][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[1][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[1][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-1">Anterior</a>
  <a href="#page-3">Próxima</a>
</section></div>

<section id="page-3">
  <h1>Página 3</h1>
  <a href="#page-2">Anterior</a>
  <a href="#page-4">Próxima</a>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor posuere neque, non elementum dui
    finibus eget. Suspendisse eget lorem ut orci ullamcorper laoreet. Nam suscipit at lacus et ullamcorper.
    Quisque ac risus eu arcu aliquet tempus quis sed sem. Aliquam dui est, cursus nec erat eu, posuere
    efficitur est. Aenean convallis vestibulum dolor, eu sodales arcu posuere a. Nullam euismod tempus turpis,
    vitae suscipit urna suscipit in. Nulla pellentesque massa id turpis pretium euismod.</p>

  <p>Praesent ultricies ligula at tortor euismod, sed mattis elit posuere. Integer aliquam elementum pretium. Sed
    a lorem pellentesque, consequat ipsum eget, elementum ipsum. Class aptent taciti sociosqu ad litora
    torquent per conubia nostra, per inceptos himenaeos. Cras semper neque nec ultricies rhoncus. Sed nec
    cursus sapien. Mauris in pretium leo. Aenean semper ultricies dictum. Aenean imperdiet mauris at magna
    tincidunt rhoncus. Morbi orci metus, interdum nec bibendum quis, dignissim a ex.</p>

  <a href="#page-2">Anterior</a>
  <a href="#page-4">Próxima</a>
</section>

<section id="page-4">
  <h1>Página 4</h1>
  <a href="#page-3">Anterior</a>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor posuere neque, non elementum dui
    finibus eget. Suspendisse eget lorem ut orci ullamcorper laoreet. Nam suscipit at lacus et ullamcorper.
    Quisque ac risus eu arcu aliquet tempus quis sed sem. Aliquam dui est, cursus nec erat eu, posuere
    efficitur est. Aenean convallis vestibulum dolor, eu sodales arcu posuere a. Nullam euismod tempus turpis,
    vitae suscipit urna suscipit in. Nulla pellentesque massa id turpis pretium euismod.</p>

  <p>Praesent ultricies ligula at tortor euismod, sed mattis elit posuere. Integer aliquam elementum pretium. Sed
    a lorem pellentesque, consequat ipsum eget, elementum ipsum. Class aptent taciti sociosqu ad litora
    torquent per conubia nostra, per inceptos himenaeos. Cras semper neque nec ultricies rhoncus. Sed nec
    cursus sapien. Mauris in pretium leo. Aenean semper ultricies dictum. Aenean imperdiet mauris at magna
    tincidunt rhoncus. Morbi orci metus, interdum nec bibendum quis, dignissim a ex.</p>

  <a href="#page-3">Anterior</a>
</section>

</body>