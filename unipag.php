<?php
session_start();

$msg='';
$res="";
$i='';
$ponto=0;
$nq = 0;
$pos='';


if(isset($_POST["nq"])){
    $nq = $_POST["nq"];
    }

    if(isset($_POST["ponto"])){

        }
//$posicao=rand(0,3);
$perguntas = array ("A gem do Steven e sua mãe Rose Quartz é uma:",
                    "A Diamante Rosa teve:",
                    "A Garnet é uma fusão de:",
                    "A música cantada por Pérola no episódio senhor Greg se chama:",
                    "Durante a série, o Steven quase morreu (aproximadamente):",
                    "A ordem de entrada das Crystal Gems na rebelião é:",
                    "Qual das Gems a seguir passou 6000 anos presa em um espelho?",
                    "O Steven tem qual animal como pet?",
                    "A vilã do filme de Steven Universe é a:",
                    "Que cores correspondem a autoridade diamante?"
                );
$alt = array(
                //pergunta 1
                array ("Quartzo Rosa","Diamante Rosa","Turmalina Rosa","Safira Rosa"),
                //pergunta 2
                array ("2 Pérolas e uma Espinela(além das gems da colônia e outros serviçais)",
                "1 Pérola (além das gems da colônia e outros serviçais)",
                "2 Pérolas e uma Ametista (além das gems da colônia e outros serviçais)",
                "nenhuma das alternativas acima"),
                //pergunta 3
                array ("uma Rubi e uma Pérola","uma Rubi e uma Ametista","duas Safiras","uma Rubi e uma Safira"),
                //pergunta 4
                array ("É isso, acabou?","Se por ela fizer","Aqui foi um pensamento ","Mais forte que você"),
                //pergunta 5
                array ("20 vezes","Nenhuma vez","79 vezes","128 vezes"),
                //pergunta 6
                array ("Rose, Pérola, Ametista e Garnet","Pérola, Garnet, Ametista, Rose","Rose, Garnet, Pérola, Ametista","Rose, Pérola, Garnet, Ametista
                "),
                //pergunta 7
                array ("Peridot","Bismuto","Lápis Lazuli","Jasper"),
                //pergunta 8
                array ("Um Leão","Uma Iguana","Um Gato","Uma gem corrompida"),
                //pergunta 9
                array ("Espinela","Morganita","Jasper","Alexandrite"),
                //pergunta 10
                array ("Azul, Vermelho, Verde e Preto
                ","Branco, Amarelo, Azul e Rosa","Branco, Magenta, Amarelo e Ciano","Preto, Rosa, Púrpura e Laranja")
                );

                function validar($alternativa, $posicaores, $i){
                   global $ponto;
                    if($alternativa==$posicaores){
                        $ponto = $_POST["ponto"]+1;
                        return "Parabéns!!! Você acertou a questão anterior e ganhou +1 ponto.";
                    }else{
                        $ponto= $_POST["ponto"];
                        return "Que pena, você errou e não marcou pontos.";}
                    }
$resp = array(2, 1, 4, 1, 3, 4, 3, 1, 1, 2);



    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];


if(isset($_POST["alt"])){
    $res= validar($_POST["alt"], $resp[$nq], $_POST["ponto"]);
    $nq = $_POST["nq"]+1;
    }$msg= " ".$res;
        }
       
function questoes($i){
    global $perguntas, $alt, $_SESSION, $nq, $ponto, $msg;
    if( $nq>9){
        $i=0;
        $nq=0;
    }
?>
<div class="parent">
    <section  id="1">
    <form action="unipag.php" method="post">
    <?php echo $msg?>
        <label for="pontos">Total de pontos:  </label><input type="text" name="ponto" value="<?php echo $ponto; ?>">
        <div class="alternatives"> 
        <div class="radio-input">
        <h1><?php echo ($perguntas[$i])?></h1>
        <label for="pontos">Pergunta atual:<input type="text" name="nq" value="<?php echo $nq; ?>">
        <br>
        <input type="radio" name="alt" class="input" id="a1" value="1" required><?php echo($alt[$i][0])?></br>
        <input type="radio" name="alt" class="input" id="a2" value="2" required><?php echo($alt[$i][1])?></br>
        <input type="radio" name="alt" class="input" id="a3" value="3" required><?php echo($alt[$i][2])?></br>
        <input type="radio" name="alt" class="input" id="a4" value="4" required><?php echo($alt[$i][3])?></br>
        <input type="submit" name= "calcular" value="calcular">
    </form>
</div>
</div>
    <?php if($i==9){ 
       echo '<a href="final.php"><button>Finalizar</button></a>';?>
</section>
</div>
<?php
}}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="Script.js"></script> 
    <title>Steven Universo Quiz</title>
   
    <title>Document</title>
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
<?php questoes($nq)?>
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
</html>
