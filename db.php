<?php
         $usr="root";
        $clave="";
        $server="127.0.0.1"; // o localhost
        $bd="db_2024_proyecto";
         $conexion = mysqli_connect($server,$usr,$clave,$bd);
         
       if($conexion->connect_errno){
         
        die("Conexión fallida". $conexion->connect_errno);
       }
        ?>
