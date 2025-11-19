<?php
// Validar recepción de datos
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$clave = $_POST['clave'] ?? '';

// Mostrar datos en tabla
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Registrados</title>
    <style>
        table {
            width: 40%;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Datos del Usuario Registrado</h2>

<table>
    <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Contraseña</th>
    </tr>
    <tr>
        <td><?php echo htmlspecialchars($nombre); ?></td>
        <td><?php echo htmlspecialchars($correo); ?></td>
        <td><?php echo htmlspecialchars($clave); ?></td>
    </tr>
</table>

</body>
</html>
