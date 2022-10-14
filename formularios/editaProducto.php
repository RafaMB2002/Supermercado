<?php
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
    <title>Alta productos</title>
</head>
<body>
    <h1>Alta de producto</h1>
    <form action="nuevoProducto.php" method="post" enctype="multipart/form-data">
        <label for="">ID:</label>
        <input type="text" name="id" value="<?php if(isset($id)) echo $id; ?>" disabled="disabled"/><br>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>"/>
        <?php
            
            if(isset($_POST['guardar'])&& !empty($_FILES['imagen'])){
                echo "<img src='data:image/png;base64,$imagen' title='var'/><br>";
            }
        ?>
        <br>
        <label for="">Imagen:</label>
        <input type="file" name="imagen"/><br>
        <input type="submit" name="guardar" value="Guardar">
        
        
    </form>
</body>
</html>