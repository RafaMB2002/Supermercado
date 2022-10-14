<?php
include '../libreriaMysql/bd.php';
$imagen="";
if(isset($_POST['guardar'])){
    //$extension=$_FILES['imagen']['type'];
    //Array con los errores del formulario
    //$errores=[];
    //Array con los datos del producto
    //$producto=[];

 
        if(!empty($_POST['nombre'])){
            //$producto['nombre']=$nombre;
            $nombre=trim($_POST['nombre']);
        }else{
            '<span style="color:red;">Introduzca el nombre del producto</span>';
        }
    

    //$formatosOk=array('jpg','png');
    if(isset($_FILES['imagen'])){
        if(!empty($_FILES['imagen'])){
            //echo'La imagen no esta vacía';
            //var_dump ($_FILES['imagen']);
            $imagen=file_get_contents($_FILES['imagen']['tmp_name']);
            $imagen=base64_encode($imagen);
           // $producto['foto']=$imagen;
           //echo $imagen;
        }else{
            echo '<span style="color:red;">Introduzca el nombre del producto</span>';
        }
    }
    if(!empty($nombre)&& !empty($imagen)){
        if(insertProduct($nombre,$imagen)){
            echo 'Producto añadido';
        }
       
    }else{
        echo '<span style="color:red;">Error</span>';
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