<?php

require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$Id=$_POST['id'];

$categoriaDao->mostrar_id($Id);
?>