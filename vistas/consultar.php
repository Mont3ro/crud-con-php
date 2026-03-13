<?php

$controlador = new ControladorUsuario();

if (isset($_GET["id"])) {
    $registro = $controlador->consultar($_GET["id"]);
}

?>
<h1> MODULO CONSULTAR </h1>
<p> ID: <?php echo $registro["id"]; ?></p>
<p> Cedula: <?php echo $registro["cedula"]; ?></p>
<p> Nombre: <?php echo $registro["nombre"]; ?></p>
<p> Apellido: <?php echo $registro["apellido"]; ?></p>
<p> Email: <?php echo $registro["correo"]; ?></p>
<p> Direccion: <?php echo $registro["direccion"]; ?></p>
<p> Telefono: <?php echo $registro["telefono"]; ?></p>
<p> Numero de ficha: <?php echo $registro["numero_ficha"]; ?></p>
<p> Contraseña: <?php echo $registro["contraseña"]; ?></p>