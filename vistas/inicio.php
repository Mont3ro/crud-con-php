<h2>Lista de Usuarios</h2>
<?php
    $controlador = new ControladorUsuario() ;
    $resultado = $controlador->listar();
?>




<table border="1" cellpadding="8">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Correo</th>
<th>Dirección</th>
<th>Teléfono</th>
<th>N° Ficha</th>
<th>Cédula</th>
<th>Password</th>
<th>Acciones</th>
</tr>
</thead>

<tbody>

<?php
$resultado = $controlador->listar();
echo "Usuarios encontrados: " . mysqli_num_rows($resultado);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['numero_ficha'] . "</td>";
        echo "<td>" . $fila['cedula'] . "</td>";
        echo "<td>" . $fila['contraseña'] . "</td>";
        echo "<td>
                <a href='?cargar=consultar&id=" . $fila['id'] . "'>Consultar</a> |
                <a href='?cargar=editar&id=" . $fila['id'] . "'>Editar</a> |
                <a href='?cargar=eliminar&id=" . $fila['id'] . "'>Eliminar</a>
              </td>";
        echo "</tr>";
    }

?>

</tbody>
</table>