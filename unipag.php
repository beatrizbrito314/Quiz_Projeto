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
//$posicao=rand(0,3);
$perguntas = array ("pergunta 1", 
                    "pergunta 2",
                    "pergunta 3", 
                    "pergunta 4", 
                    "pergunta 5",
                    "pergunta 6", 
                    "pergunta 2",
                    "pergunta 7", 
                    "pergunta 8", 
                    "pergunta 9", 
                    "pergunta 10");
$alternativas = array(
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
            $res = $_POST["res"];
            }

        if($res=="1"){
        echo ("Correto");
        }else{
            echo ("incorreto");}
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
    <section id="page-1" style="background-color: red">
        <h1>Página 1</h1>
        <?php
            include("arrays.php")
        ?>
        <h1><?php echo($perguntas[0])?></h1>

        <form action="unipag.php" method="post">

        <input type="radio" name="res" value="1"><?php echo($respostas[0][0])?></br>
        <input type="radio" name="res" value="2"><?php echo($respostas[0][1])?></br>
        <input type="radio" name="res" value="3"><?php echo($respostas[0][2])?></br>
        <input type="radio" name="res" value="4"><?php echo($respostas[0][3])?></br>  
        
        <td colspan="2"><a href="#page-2"><button type="submit" name="calcular">Próxima</button></a></td>
        </form>
    </section>
    <section id="page-2" style="background-color: orange">
        <h1>Página 2</h1>
        <?php
            include("arrays.php")
        ?>
        <h1><?php echo($perguntas[1])?></h1>

        <form action="unipag.php" method="post">

        <input type="radio" name="res" value="1"><?php echo($respostas[0][0])?></br>
        <input type="radio" name="res" value="2"><?php echo($respostas[0][1])?></br>
        <input type="radio" name="res" value="3"><?php echo($respostas[0][2])?></br>
        <input type="radio" name="res" value="4"><?php echo($respostas[0][3])?></br>  

        <td colspan="2"><a href="#page-3"><button type="submit" name="calcular">Próxima</button></a></td>
        </form>
    </section>
    <section id="page-3" style="background-color: yellow">
        <h1>Página 3</h1>
        <?php
            include("arrays.php")
        ?>
        <h1><?php echo($perguntas[2])?></h1>

        <form action="unipag.php" method="post">

        <input type="radio" name="res" value="1"><?php echo($respostas[2][0])?></br>
        <input type="radio" name="res" value="2"><?php echo($respostas[2][1])?></br>
        <input type="radio" name="res" value="3"><?php echo($respostas[2][2])?></br>
        <input type="radio" name="res" value="4"><?php echo($respostas[2][3])?></br>  

        <td colspan="2"><a href="#page-4"><button type="submit" name="calcular">Próxima</button></a></td>
        </form>
    </section>
    <section id="page-4" style="background-color: green">
        <h1>Página 4</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[3])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-5" style="background-color: aquamarine">
        <h1>Página 5</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[4])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-6" style="background-color: blue">
        <h1>Página 6</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[5])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-7" style="background-color: violet">
        <h1>Página 7</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[6])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-8" style="background-color: purple">
        <h1>Página 8</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[7])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-9" style="background-color: pink">
        <h1>Página 9</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[8])?></h1>
            <form action="unipag.php" method="post">

    </section>
    <section id="page-10" style="background-color: white">
        <h1>Página 10</h1>
            <?php
                include("arrays.php")
            ?>
            <h1><?php echo($perguntas[9])?></h1>
            <form action="unipag.php" method="post">

    </section>


    
        



</body>
</html>