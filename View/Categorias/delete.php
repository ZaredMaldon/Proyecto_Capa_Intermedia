<?php 
 require_once("../../Model/Conexion.php");

    if( isset($_GET["idCategoria"])){
         $idCategoria = $_GET["idCategoria"];

         $conexion=new Conectar();
         $con=$conexion->conectar(); 

         $consulta = "DELETE FROM categorias WHERE idCategoria=$idCategoria";
         $con ->query($consulta);

    }
        header("location: Categoria_add.php");
        exit;
?>