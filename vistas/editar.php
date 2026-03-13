<?php

$controlador = new ControladorUsuario();

if(isset($_GET["id"])) {
    $registro = $controlador->consultar($_GET["id"]);
}

if(isset($_POST["editar"])) {

    $controlador->editar(
        $_POST["id"],
        $_POST["nombre"],
        $_POST["apellido"],
        $_POST["correo"],
        $_POST["direccion"],
        $_POST["telefono"],
        $_POST["numero_ficha"],
        $_POST["password"]
    );

    header("Location: index.php");
}

?>
<h1>Editar Usuario</h1>

<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">

<label>Nombre:</label><br>
<input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>" required><br><br>

<label>Apellido:</label><br>
<input type="text" name="apellido" value="<?php echo $registro['apellido']; ?>" required><br><br>

<label>Correo:</label><br>
<input type="email" name="correo" value="<?php echo $registro['correo']; ?>" required><br><br>

<label>Dirección:</label><br>
<input type="text" name="direccion" value="<?php echo $registro['direccion']; ?>" required><br><br>

<label>Teléfono:</label><br>
<input type="text" name="telefono" value="<?php echo $registro['telefono']; ?>" required><br><br>

<label>Número ficha:</label><br>
<input type="text" name="numero_ficha" value="<?php echo $registro['numero_ficha']; ?>" required><br><br>

<label>Contraseña:</label><br>
<input type="password" name="password"><br><br>

<input type="submit" name="editar" value="Editar">

</form>
