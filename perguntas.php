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

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  
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
    

<!--Primeira pergunta-->
<section id="page-1" style="background-color: aquamarine">


<h1><?php echo($perguntas[0])?></h1>

<form action="perguntas.php" method="post">

<input type="radio" name="perguntas[0]" value="1"><?php echo($respostas[0][0])?></br>
<input type="radio" name="perguntas[0]" value="2"><?php echo($respostas[0][1])?></br>
<input type="radio" name="perguntas[0]" value="3"><?php echo($respostas[0][2])?></br>
<input type="radio" name="perguntas[0]" value="4"><?php echo($respostas[0][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
<a href="#page-2">Próxima</a>
</form>
 
</section> 


<!--segunda pergunta-->
<div class="1" style="background-color: blue">
<section id="page-2">
<h1><?php echo($perguntas[1])?></h1>

<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[1][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[1][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[1][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[1][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-1">Anterior</a>
  <a href="#page-3">Próxima</a>
</section></div>

<!--terceira pergunta-->
<section id="page-3">
<h1><?php echo($perguntas[2])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[2][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[2][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[2][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[2][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-2">Anterior</a>
  <a href="#page-4">Próxima</a>
</section>

<!--quarta pergunta-->
<section id="page-4" style="background-color: aquamarine">


<h1><?php echo($perguntas[3])?></h1>

<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[3][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[3][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[3][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[3][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>

</form>
<a href="#page-3">Anterior</a>
  <a href="#page-5">Próxima</a>
</section> 


<!--quinta pergunta-->
<div class="1" style="background-color: blue">
<section id="page-5">
 
  <a href="#page-1">Anterior</a>
  <a href="#page-3">Próxima</a>
 

<h1><?php echo($perguntas[4])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[4][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[4][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[4][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[4][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-4">Anterior</a>
  <a href="#page-6">Próxima</a>
</section></div>

<!--sexta pergunta-->
<section id="page-6">
<h1><?php echo($perguntas[5])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[5][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[5][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[5][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[5][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-5">Anterior</a>
  <a href="#page-7">Próxima</a>
</section>
<section id="page-1" style="background-color: aquamarine">

<!--setima pergunta-->

<section id="page-7">
<h1><?php echo($perguntas[6])?></h1>

<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[6][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[6][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[6][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[6][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>

</form>
<a href="#page-6">Anterior</a>
  <a href="#page-8">Próxima</a>
</section> 


<!--oitava pergunta-->
<div class="1" style="background-color: blue">
<section id="page-8">

  <a href="#page-7">Anterior</a>
  <a href="#page-9">Próxima</a>
 

<h1><?php echo($perguntas[7])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[7][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[7][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[7][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[7][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-9">Anterior</a>
  
</section></div>

<!--nona pergunta-->
<section id="page-9">
<h1><?php echo($perguntas[8])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[8][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[8][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[8][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[8][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-8">Anterior</a>
  <a href="#page-10">Próxima</a>
</section>


<!--decima pergunta-->
<section id="page-10">
<h1><?php echo($perguntas[9])?></h1>
<form action="perguntas.php" method="post">

<input type="radio" name="res" value="1"><?php echo($respostas[9][0])?></br>
<input type="radio" name="res" value="2"><?php echo($respostas[9][1])?></br>
<input type="radio" name="res" value="3"><?php echo($respostas[9][2])?></br>
<input type="radio" name="res" value="4"><?php echo($respostas[9][3])?></br>  
 
<td colspan="2"> <input class = "button" type="submit" name="calcular"></td>
</form>

  <a href="#page-9">Anterior</a>

</section>

</body>