<h1>Agregar Nuevo Usuario</h1>

<form action="" method="post">

<label for="cedula">Cédula:</label> <br>
<input type="text" id="cedula" name="cedula" required> <br><br>

<label for="nombre">Nombre</label> <br>
<input type="text" id="nombre" name="nombre" required> <br><br>

<label for="apellido">Apellido</label> <br>
<input type="text" id="apellido" name="apellido" required> <br><br>

<label for="correo">Correo</label> <br>
<input type="email" id="correo" name="correo" required> <br><br>

<label for="direccion">Dirección</label> <br>
<input type="text" id="direccion" name="direccion" required> <br><br>

<label for="telefono">Teléfono</label> <br>
<input type="text" id="telefono" name="telefono" required> <br><br>

<label for="numero_ficha">Número de Ficha</label> <br>
<input type="text" id="numero_ficha" name="numero_ficha" required> <br><br>

<label for="contraseña">Contraseña</label> <br>
<input type="password" id="contraseña" name="contraseña" required> <br><br>

<input type="submit" name="enviar" value="Registrar">

</form>

<?php

$controlador = new ControladorUsuario();

if (isset($_POST['enviar'])) {

    // Capturar datos del formulario
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $numero_ficha = $_POST['numero_ficha'];
    $contraseña = $_POST['contraseña'];

    $resultado = $controlador->crear(
        $cedula,
        $nombre,
        $apellido,
        $correo,
        $direccion,
        $telefono,
        $numero_ficha,
        $contraseña
    );

    if ($resultado) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>