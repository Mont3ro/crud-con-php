<?php
    include_once("controladores/controlador.php");
    include_once("controladores/enrutador.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
</head>
<body>
    <h1>CRUD CON PHP Y POO EN MVC </h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Registrar</a></li>
            
        </ul>
    </nav>
    <?php
       $enrutador=new Enrutador();
       $enrutador->cargarVista("crear");
       
    ?>
</body>
</html>