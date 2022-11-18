<?php
require_once("../Controller/CategoriaDAO.php");
$categoriaDao=new CategoriaDao();

$_Categoria = $_POST['Categoria'];
$_Descripcion = $_POST['Descripcion'];


$categoriaDao->agregar($_Categoria,$_Descripcion);

?>