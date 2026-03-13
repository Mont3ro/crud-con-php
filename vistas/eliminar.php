<?php

    $controlador = new controladorUsuario();

    if(isset($_GET["id"])) {
        $registro = $controlador->consultar($_GET["id"]);
    }
    if(isset($_POST["eliminar"])) {
        $controlador->eliminar($_GET["id"]);
        header("Location: index.php");
    }

?>

<form action="" method="post">
    <table border="">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Número de Ficha</th>
            </tr>
        </thead>
        <body>
            <tr>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['apellido']; ?></td>
                <td><?php echo $registro['cedula']; ?></td>
                <td><?php echo $registro['correo']; ?></td>
                <td><?php echo $registro['direccion']; ?></td>
                <td><?php echo $registro['telefono']; ?></td>
                <td><?php echo $registro['numero_ficha']; ?></td>
                <td>
                    <input type="submit" name="eliminar" value="Eliminar">
                </td>
            </tr>
        </body>
    </table>
</form>

<h1>Eliminar Usuario</h1>