<?php
session_start();
require_once("../../Controller/ProductosDAO.php");
$productosDao=new ProductoDao();

$_id=$_POST['opc'];



if(isset($_SESSION['carrito'])){
    foreach($_SESSION['carrito'] as &$carrito){
        if($_id!=$carrito[0]){
            $array=$productosDao->mostrar_id_php($_id);
    
            foreach($array as &$a){
                $_SESSION['carrito'][]=array($a['id'],$a['Nombre'],$a['Precio'],$a['Imagen1']);
            }
            //unset($_SESSION['carrito']);
            
        }
    }
    echo json_encode($_SESSION['carrito']);
}else{
    $array=$productosDao->mostrar_id_php($_id);
    
    foreach($array as &$a){
        $_SESSION['carrito'][]=array($a['id'],$a['Nombre'],$a['Precio'],$a['Imagen1']);
    }
    echo json_encode($_SESSION['carrito']);
}
?>