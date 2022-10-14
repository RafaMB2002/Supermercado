<?php
include '../libreriaMysql/bd.php';
$producto=getById($_GET['id']);
var_dump($producto);
if(!empty($producto)){
    $idProducto=$producto[0];
    $nombrePro=$producto[1];
    $imgPro=$producto[2];
    
}

if(isset($_POST['guardar'])){

    $nombre=trim($_POST['nombre']);
    $imagen="";
    //Array con los errores del formulario
    $errores=[];
    //Array con los datos del producto
    $producto=[];

    if(!empty($nombre)){
        $producto['nombre']=$nombre;
    }else{
        '<span style="color:red;">Introduzca el nombre del producto</span>';
    }

    if(isset($_FILES['imagen'])){
        //$imagen=file_get_contents($_FILES['imagen']['tmp_name']);
        //$imagen=base64_encode($imagen);
        $imagen=base64_decode($imagen);
        //$producto['foto']=$imagen;
    }else{
        '<span style="color:red;">Introduzca el nombre del producto</span>';
    }
}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edita producto</title>
</head>
<body>
    <h1>Edita producto</h1>
    <form action="editaProducto.php" method="post" enctype="multipart/form-data">
        <label for="">ID:</label>
        <input type="text" name="id" value="<?php if(isset($idProducto)) echo $idProducto; ?>" disabled="disabled"/><br>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php if(isset($nombrePro)) echo $nombrePro; ?>"/>
        <?php
            
            if(isset($imgPro)){
                echo "<img src='data:image/png;base64,".$imgPro."' title='var'/><br>";
            }
        ?>
        <br>
        <label for="">Imagen:</label>
        <input type="file" name="imagen"/><br>
        <input type="submit" name="guardar" value="Guardar">
        
        
    </form>
</body>
</html>