<?php 
require_once('../ProductosDAO.php');
$productosDao=new ProductoDao();
$Imagen=null;
$Video=null;
$Nombre=$_POST['nombre'];
$Precio=$_POST['Precio'];
$Categoria=$_REQUEST['categoria'];
$Cantidad=$_POST['Cantidad'];
$Valoracion=$_POST['Valoracion'];

$array=array(
    'Nombre'=>$Nombre,
    'Precio'=>$Precio,
    'Fk_Categoria'=>$Categoria,
    'Imagen1'=>$_FILES['Imagenes']['tmp_name'],
    'Imagen2'=>null,
    'Imagen3'=>null,
    'Video'=>$_FILES['Video']['tmp_name'],
    'Cantidad'=>$Cantidad,
    'Valoracion'=>$Valoracion,
    'Ventas'=>5,
    'Existencia'=>1
);
$productosDao->agregar($array);
?>