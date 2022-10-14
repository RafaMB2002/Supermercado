<?php
include 'libreriaMysql/bd.php';
$array= getAll();

function pintaListado($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "<tr>
        <td>" . $array[$i][0] . "</td>
        <td>" . $array[$i][1] . "</td>
        <td><img src='data:image/png;base64,".$array[$i][2]."' title='var' width='50' height='50'></td>
        <td><a href='formularios/editaProducto.php?id=".$array[$i][0]."'><img src='imagesListado/editar.png' width='30' height='30'></a></td>
        <td><a href='formularios/borrarProducto.php?id=".$array[$i][0]."'><img src='imagesListado/eliminar.png' width='30' height='30'></a></td>
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