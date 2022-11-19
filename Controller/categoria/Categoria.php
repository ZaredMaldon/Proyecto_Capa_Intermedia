<?php
require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$_Categoria = $_POST['Categoria'];
$_Descripcion = $_POST['Descripcion'];

session_start();
$categoriaDao->agregar($_Categoria,$_Descripcion,$_SESSION['userNow'][0]);
?> 