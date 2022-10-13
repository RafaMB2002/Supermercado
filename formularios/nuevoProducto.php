<?php
if(isset($_POST['guardar'])){
    $nombre=trim($_POST['nombre']);
    $imagen="";

    $producto=[];
    if(!empty($nombre)){
        $producto['nombre']=$nombre;
        var_dump( $producto ['nombre']);
    }
    if(isset($_FILES['imagen'])){
        $imagen=file_get_contents($_FILES['imagen'][['tmp_name']]);
        $imagen=base64_encode($imagen);
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
    <h1 >Alta de producto</h1>
    <form action="nuevoProducto.php" method="post">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>"/><br>
        <label for="">Imagen:</label>
        <input type="file" name="imagen"/><br>
        <input type="submit" name="guardar" value="Guardar">
        
        <?php
            
            if(isset($_POST['enviar'])&& !empty($imagen)){
                var_dump ($imagen);
            }
        ?>
    </form>
</body>
</html>