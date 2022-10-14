<?php
include '../libreriaMysql/bd.php';
deleteById($_GET['id']);
header('location: ../listado.php');
?>