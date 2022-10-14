<?php

function conexion(){
    $conec=new PDO('mysql:host=localhost;dbname=supermercado','supermercado','4465');
    return $conec;
}
function getById($id){
    $conec=conexion();
    $registro= $conec->query("SELECT id,nombre,imagen from productos where id=$id");
    $datos=$registro->fetch();

    return $datos;
}
function getAll(){
    $conec=conexion();
    $array=[];
    $registros=$conec->query("SELECT * from productos");
    while($datos=$registros->fetch()){
        $array[$datos[0]][0]=$datos[0];
        $array[$datos[0]][1]=$datos[1];
        $array[$datos[0]][2]=$datos[2];
    }
    
    return $array;
}

function updateProduct($id,$nombre=null,$foto=null){
    $conec=conexion();
    $conec->query("UPDATE productos SET nombre='$nombre',imagen='$foto' where id=$id");
}

function deleteById($id){
    $conec=conexion();
    $conec->query("DELETE FROM productos WHERE id=$id");
}
function insertProduct($nombre,$foto){
    $conec=conexion();
    $conec->query("INSERT INTO productos VALUES(null,'$nombre','$foto')");
}
?>