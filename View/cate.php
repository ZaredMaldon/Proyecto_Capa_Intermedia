<?php
require_once("../Controller/CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

$Categoria = $_POST['Categoria'];
$Descripcion = $_POST['Descripcion']; 

$categoriaDao->modificar($Categoria,$Descripcion);
?>  

<!-- <label class="fw-bold"> Categoria:</label></br>
           <span> ${x.text}</span>
           <label class="fw-bold"> Descripción:</label></br>
           <span> ${x.description}</span>  -->