<?php
session_start();
require_once("../../Controller/ProductosDAO.php");
$productosDao=new ProductoDao();

$_id=$_POST['opc'];
 
if(isset($_SESSION['lista'])){
    foreach($_SESSION['lista'] as &$lista){
        if($_id!=$lista[0]){
            $array=$productosDao->mostrar_id_php($_id);
    
            foreach($array as &$a){
                $_SESSION['lista'][]=array($a['id'],$a['Nombre'],$a['Precio'],$a['Imagen1']);
            }
            
        }
    }
    echo json_encode($_SESSION['lista']);
}else{
    $array=$productosDao->mostrar_id_php($_id);
    
    foreach($array as &$a){
        $_SESSION['lista'][]=array($a['id'],$a['Nombre'],$a['Precio'],$a['Imagen1']);
    }
    echo json_encode($_SESSION['lista']);
}
?>