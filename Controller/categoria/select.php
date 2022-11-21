<?php

require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

if(isset($_POST['Categoria'])){
    $Id=$_POST['Categoria'];

    /* echo json_encode($Id); */

    $categoriaDao->mostrar_id($Id);
}else{
    $categoriaDao->mostrar_all();
}

?>