<?php
$array[0][0] = 1;
$array[0][1] = "aceite";
$array[0][2] = "imagenAceite";

$array[1][0] = 2;
$array[1][1] = "pan";
$array[1][2] = "imagenPan";

function pintaListado($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "<tr>
        <td>" . $array[$i][0] . "</td>
        <td>" . $array[$i][1] . "</td>
        <td>" . $array[$i][2] . "</td>
        <td><a href=''><img src='imagesListado/editar.png' width='30' height='30'></a></td>
        <td><a href=''><img src='imagesListado/eliminar.png' width='30' height='30'></a></td>
    </tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <link rel="stylesheet" href="estilosListado/estilos.css">
</head>

<body>
    <div class="contenedor">
        <div class="titulo">
            <h1>LISTADO</h1>
        </div>
        <div class="btnNuevo">
            <a href="formularios/nuevoProducto.php">NUEVO</a>
        </div>
        <div class="listado">
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>IMAGEN</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php pintaListado($array); ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>