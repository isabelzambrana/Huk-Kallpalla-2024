<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <?php

    $resultado=fopen("llegar.txt","a");

    while(!feof($resultado)){

        $leer=fgets($resultado);

        $ver=nl2br($leer);

        echo $ver;

    }

    ?>

</body>

</html>