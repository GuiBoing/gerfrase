<?php


echo " testando :3 ";


$titulos = ["Bárbaro(a)", "Mago(a)", "Paladino(a)", "goblin", "orc"];

$qualidades = ["passivo(a)","atacado(a)", "agressivo(a)", "brabissimo", "lixo"];

$nome = ["jaquisins", "daniel", "juquinha", "mulekin", "LEProso"];

$local = ["edron", "samuels drift", "pacera", "TOP", "onibus de joinville"]

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<echo><h2> <?=  "ó ".$nome[rand(0,4)]." voce é ".$qualidades[rand(0,4)]." ,deus dos ".$titulos[rand(0,4)]." em ".$local[rand(0,4)]?></h2></echo>

<button><a href="javascript:location.reload(true)">refresh </a></button>

</body>
</html>
