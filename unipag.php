<?php
session_start();
//tem que mudar essas coisas
    if(isset($_POST['Proximo1'])){
        $_SESSION["v1"] = "xx";
        $_SESSION['refeicao'] = $_POST['refeicao'];
    }
    if(isset($_POST['Proximo2'])){
        $_SESSION["v2"] = "xx";
        $_SESSION['refeicao1'] = $_POST['refeicao1'];
    }
$ponto=0;
$msg='';
$res="";
$r='';
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

        if(isset($_POST["res1"])){
            $r= resposta( $_POST["res1"], "Diamante Rosa");
            } $msg= " ".$r;
            //pergunta 2
            if(isset($_POST["res2"])){
                $r= resposta( $_POST["res2"], "2 Pérolas e uma Espinela(além das gems da colônia e outros serviçais)");
                }$msg= " ".$r;
            //pergunta 3
            if(isset($_POST["res3"])){
                $r= resposta( $_POST["res3"], "uma Rubi e uma Safira");
                }$msg= " ".$r;
            //pergunta 4
            if(isset($_POST["res4"])){
                $r= resposta( $_POST["res4"], "É isso, acabou?");
                }$msg= " ".$r;
            //pergunta 5
            if(isset($_POST["res5"])){
                $r= resposta( $_POST["res5"], "79 vezes");
                }$msg= " ".$r;
            //pergunta 6
            if(isset($_POST["res6"])){
                $r= resposta( $_POST["res6"], "Rose, Pérola, Garnet, Ametista");
                }$msg= " ".$r;
            //pergunta 7
            if(isset($_POST["res7"])){
                $r= resposta( $_POST["res7"], "Lápis Lazuli");
                }$msg= " ".$r;
            //pergunta 8
            if(isset($_POST["res8"])){
                $r= resposta( $_POST["res8"], "Um Leão");
                }$msg= " ".$r;
            //pergunta 9
            if(isset($_POST["res9"])){
                $r= resposta( $_POST["res9"], "Espinela");
                }$msg= " ".$r;
            //pergunta 10
            if(isset($_POST["res10"])){
                $r= resposta( $_POST["res10"], "Branco, Amarelo, Azul e Rosa");
                }$msg= " ".$r;
        }
        

function resposta($alternativa, $resposta){
        global $ponto;
        // a $alternativa (name) é oq a pessoa selecionar no radio. A $resposta é informada no value do radio
        // a função exibirá uma msg em verde caso o name corresponda ao value da resposta correta (definir no isset($_POST)
        if($alternativa==$resposta){
             $ponto= $ponto+10;
            return "<div  style='background-color:green;'>Parabéns, você ganhou 10 pontos!!! <br>  Alternativa correta: ".$resposta."</div >";
        }else{
            $ponto= 0;
            return "<div style='background-color:red;'> Você marcou a alternativa incorreta e não marcou pontos. <br> Alternativa marcada: ".$alternativa."</div> <br> <div  style='background-color:green;'> Alternativa correta: ".$resposta."</div >" ;
        }
}
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Steven Universo</title>
    <style>
        html,body {
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


 <!--pergunta 1-->
    <section id="page-1" style="background-color: red">
    <?php
      echo "Jogador: ".$_SESSION['nome'];
    ?>
        <br>
        <h1><?php echo($perguntas[0])?></h1>
    <form action="unipag.php#res1" method="post">
        <input type="radio" name="res1" value="Quartzo Rosa" required><?php echo($respostas[0][0])?></br>
        <input type="radio" name="res1" value="Diamante Rosa"  required><?php echo($respostas[0][1])?></br>
        <input type="radio" name="res1" value="Turmalina Rosa"  required><?php echo($respostas[0][2])?></br>
        <input type="radio" name="res1" value="Safira Rosa" required><?php echo($respostas[0][3])?></br>  
        <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
    </form>
</section>

<!--resultado questao 1-->
    <section id="res1" style="background-color: red">
    <h1><?php echo($perguntas[0])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-2"><button>continuar</button></a>
    </section>


<!--pergunta 2-->
<section id="page-2" style="background-color: orange">
    <?php
      echo "Jogador: ".$_SESSION['nome'];
    ?>
        <br>
        <h1><?php echo($perguntas[1])?></h1>
    <form action="unipag.php#res2" method="post">
        <input type="radio" name="res2" value="2 Pérolas e uma Espinela(além das gems da colônia e outros serviçais)" required><?php echo($respostas[1][0])?></br>
        <input type="radio" name="res2" value="1 Pérola (além das gems da colônia e outros serviçais)" required><?php echo($respostas[1][1])?></br>
        <input type="radio" name="res2" value="2 Pérolas e uma Ametista (além das gems da colônia e outros serviçais)" required><?php echo($respostas[1][2])?></br>
        <input type="radio" name="res2" value="nenhuma das alternativas acima" required><?php echo($respostas[1][3])?></br>  
        <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
    </form>
</section>

<!--resultado questao 2-->
    <section id="res2" style="background-color: red">
    <h1><?php echo($perguntas[1])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-3"><button>continuar</button></a>
    </section>


<!--pergunta 3-->
<section id="page-3" style="background-color: yellow">
    <?php
       echo "Jogador: ".$_SESSION['nome'];
     ?>
       <br>
        <h1><?php echo($perguntas[2])?></h1>
    <form action="unipag.php#res3" method="post">
        <input type="radio" name="res3" value="Uma Rubi e uma Pérola" required><?php echo($respostas[2][0])?></br>
        <input type="radio" name="res3" value="Uma Rubi e uma Ametista" required><?php echo($respostas[2][1])?></br>
        <input type="radio" name="res3" value="Duas Safiras" required><?php echo($respostas[2][2])?></br>
        <input type="radio" name="res3" value="Uma Rubi e uma Safira" required><?php echo($respostas[2][3])?></br>  
        <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
    </form>
</section>

<!--resultado questao 3-->
    <section id="res3" style="background-color: red">
    <h1><?php echo($perguntas[2])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-4"><button>continuar</button></a>
    </section>


    <!--pergunta 4-->
    <section id="page-4" style="background-color: green">
     <?php
       echo "Jogador: ".$_SESSION['nome'];
     ?>
        <br>
            <h1><?php echo($perguntas[3])?></h1>
        <form action="unipag.php#res4" method="post">
            <input type="radio" name="res4" value="É isso, acabou?" required><?php echo($respostas[3][0])?></br>
            <input type="radio" name="res4" value="Se por ela fizer" required><?php echo($respostas[3][1])?></br>
            <input type="radio" name="res4" value="Aqui foi um pensamento " required><?php echo($respostas[3][2])?></br>
            <input type="radio" name="res4" value="Mais forte que você" required><?php echo($respostas[3][3])?></br>  
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>          
    </section>
    
<!--resultado questao 4-->
<section id="res4" style="background-color: red">
    <h1><?php echo($perguntas[3])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-5"><button>continuar</button></a>
    </section>


<!--pergunta 5-->
    <section id="page-5" style="background-color: aquamarine">
      <?php
        echo "Jogador: ".$_SESSION['nome'];
       ?>
            <br>
            <h1><?php echo($perguntas[4])?></h1>
            <form action="unipag.php#res5" method="post">
                <input type="radio" name="res5" value="20 vezes" required><?php echo($respostas[4][0])?></br>
                <input type="radio" name="res5" value="Nenhuma vez" required><?php echo($respostas[4][1])?></br>
                <input type="radio" name="res5" value="79 vezes" required><?php echo($respostas[4][2])?></br>
                <input type="radio" name="res5" value="128 vezes" required><?php echo($respostas[4][3])?></br>             
                <td colspan="2"><button type="submit" name="calcular" required>Verificar</button></td>
            </form>
    </section>

    <!--resultado questao 5-->
    <section id="res5" style="background-color: red">
     <h1><?php echo($perguntas[4])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-6"><button>continuar</button></a>
    </section>


<!--pergunta 6-->
    <section id="page-6" style="background-color: blue">
       <?php
         echo "Jogador: ".$_SESSION['nome'];
        ?>
            <br>
            <h1><?php echo($perguntas[5])?></h1>
        <form action="unipag.php#res6" method="post">
            <input type="radio" name="res6" value="Rose, Pérola, Ametista e Garnet" required><?php echo($respostas[5][0])?></br>
            <input type="radio" name="res6" value="Pérola, Garnet, Ametista, Rose" required><?php echo($respostas[5][1])?></br>
            <input type="radio" name="res6" value="Rose, Garnet, Pérola, Ametista" required><?php echo($respostas[5][2])?></br>
            <input type="radio" name="res6" value="Rose, Pérola, Garnet, Ametista" required><?php echo($respostas[5][3])?></br> 
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>
    </section>

<!--resultado questao 6-->
<section id="res6" style="background-color: red">
     <h1><?php echo($perguntas[5])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-7"><button>continuar</button></a>
    </section>


<!--pergunta 7-->
    <section id="page-7" style="background-color: violet">
       <?php
          echo "Jogador: ".$_SESSION['nome'];
         ?>
            <br>
            <h1><?php echo($perguntas[6])?></h1>
        <form action="unipag.php#res7" method="post">
            <input type="radio" name="res7" value="Peridot" required><?php echo($respostas[6][0])?></br>
            <input type="radio" name="res7" value="Bismuto" required><?php echo($respostas[6][1])?></br>
            <input type="radio" name="res7" value="Lápis Lazuli" required><?php echo($respostas[6][2])?></br>
            <input type="radio" name="res7" value="Jasper" required><?php echo($respostas[6][3])?></br>  
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>
    </section>

<!--resultado questao 7-->
    <section id="res7" style="background-color: red">
     <h1><?php echo($perguntas[6])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-8"><button>continuar</button></a>
    </section>


<!--pergunta 8-->
    <section id="page-8" style="background-color: purple">
       <?php
         echo "Jogador: ".$_SESSION['nome'];
       ?>
            <br>
            <h1><?php echo($perguntas[7])?></h1>
        <form action="unipag.php#res8" method="post">
            <input type="radio" name="res8" value="Um Leão" required><?php echo($respostas[7][0])?></br>
            <input type="radio" name="res8" value="Uma Iguana" required><?php echo($respostas[7][1])?></br>
            <input type="radio" name="res8" value="Um Gato" required><?php echo($respostas[7][2])?></br>
            <input type="radio" name="res8" value="Uma gem corrompida" required><?php echo($respostas[7][3])?></br> 
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>
    </section>

<!--resultado questao 8-->
    <section id="res8" style="background-color: red">
     <h1><?php echo($perguntas[7])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-9"><button>continuar</button></a>
    </section>


<!--pergunta 9-->
    <section id="page-9" style="background-color: pink">
       <?php
           echo "Jogador: ".$_SESSION['nome'];
       ?>
            <br>
            <h1><?php echo($perguntas[8])?></h1>
        <form action="unipag.php#res9" method="post">
            <input type="radio" name="res9" value="Espinela" required><?php echo($respostas[8][0])?></br>
            <input type="radio" name="res9" value="Morganita" required><?php echo($respostas[8][1])?></br>
            <input type="radio" name="res9" value="Jasper" required><?php echo($respostas[8][2])?></br>
            <input type="radio" name="res9" value="Alexandrite" required><?php echo($respostas[8][3])?></br>  
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>
    </section>

    <!--resultado questao 9-->
    <section id="res9" style="background-color: red">
     <h1><?php echo($perguntas[8])?></h1>
        <?php echo $msg;?>
        <a href="unipag.php#page-10"><button>continuar</button></a>
    </section>


<!--pergunta 10-->
    <section id="page-10" style="background-color: white">
      <?php
      echo "Jogador: ".$_SESSION['nome'];
      ?>
            <br>
            <h1><?php echo($perguntas[9])?></h1>
        <form action="unipag.php#res10" method="post">
                
            <input type="radio" name="res10" value="Azul, Vermelho, Verde e Preto" required><?php echo($respostas[9][0])?></br>
            <input type="radio" name="res10" value="Branco, Amarelo, Azul e Rosa" required><?php echo($respostas[9][1])?></br>
            <input type="radio" name="res10" value="Branco, Magenta, Amarelo e Ciano" required><?php echo($respostas[9][2])?></br>
            <input type="radio" name="res10" value="Preto, Rosa, Púrpura e Laranja" required><?php echo($respostas[9][3])?></br>
            <td colspan="2"><button type="submit" name="calcular">Verificar</button></td>
        </form>
    
    </section>

<!--resultado questao 10-->
    <section id="res10" style="background-color: red">
        <h1><?php echo($perguntas[9])?></h1>
        <?php echo $msg;?>
        <a href="final.php"><button>Finalizar O Quiz</button></a>
    </section>

</body>
</html>