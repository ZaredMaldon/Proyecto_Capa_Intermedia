<?php

require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$Id=$_POST['id'];

echo json_encode($Id);
/* $categoriaDao->mostrar_id($Id); */
?>