<?php 
require_once('../ProductosDAO.php');
$productosDao=new ProductoDao();
$id=$_POST('id');
$productosDao->eliminar($id);
?>