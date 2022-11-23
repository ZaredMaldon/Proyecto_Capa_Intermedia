<?php
require_once("../Controller/CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$Categoria = $_POST['Categoria'];
$Descripcion = $_POST['Descripcion']; 

$categoriaDao->modificar($Categoria,$Descripcion);
?>  
