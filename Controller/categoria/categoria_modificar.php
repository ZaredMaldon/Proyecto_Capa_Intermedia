<?php
require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$_ID = $_POST['id']
$_Categoria = $_POST['Categoria'];
$_Descripcion = $_POST['Descripcion']; 

$categoriaDao->modificar($_Categoria,$_Descripcion);
?>  