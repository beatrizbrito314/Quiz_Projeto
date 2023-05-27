

<?php

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
