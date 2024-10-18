<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <?php



    $sugeren=$_POST['sugerenchia'];

    $info=fopen("llegar.txt","a");



   
    fwrite($info,"".PHP_EOL);
    fwrite($info,$sugeren);

    echo '<script>
    Swal.fire({
  title: "Se envió correctamente",
  
  icon: "success"
});
    </script>'

    ?>

</body>

</html>

