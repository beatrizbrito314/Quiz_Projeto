<?php
session_start();
$ponto=0;
$msg='';
$res="";
$i='';
$nq = 0;


if(isset($_POST["nq"])){
    $nq = $_POST["nq"]+1;
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
$respostas = array(
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


    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];
        }
       
function questoes($i){
    global $perguntas, $respostas, $_SESSION, $nq;
    if( $nq>9){
        $i=0;
        $nq=0;
  
    }
    
function resposta()
    

?>
    <section id="1">


    <form action="unipag.php" method="post">
        <h1><?php echo ($perguntas[$i])?></h1>
        <input type="text" name="nq" value="<?php echo $nq; ?>">
        <br>
        <input type="radio" name="a1" value="Quartzo Rosa " require><?php echo($respostas[$i][0])?></br>
        <input type="radio" name="a1" value="Diamante Rosa" require><?php echo($respostas[$i][1])?></br>
        <input type="radio" name="a1" value="Turmalina Rosa" require><?php echo($respostas[$i][2])?></br>
        <input type="radio" name="a1" value="Safira Rosa" require><?php echo($respostas[$i][3])?></br>
        <input type="submit" name= "calcular" value="calcular">
    </form>
</section>
<?php
}


    // a $alternativa (name) é oq a pessoa selecionar no radio. A $resposta é informada no value do radio
        // a função exibirá uma msg em verde caso o name corresponda ao value da resposta correta (definir no isset($_POST)
       # while($alternativa==$resposta){
           // $ponto++;
            //return $ponto;
            //return "<div  style='background-color:green;'>Parabéns, você ganhou 10 pontos!!! <br>  Alternativa correta: ".$resposta."</div >";


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


<?php questoes($nq) ?>


</body>
</html>