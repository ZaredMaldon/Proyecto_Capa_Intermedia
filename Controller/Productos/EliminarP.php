<?php 
require_once('../ProductosDAO.php');
$productosDao=new ProductoDao();
$id=$_POST['opc'];
$productosDao->eliminar($id);
?>