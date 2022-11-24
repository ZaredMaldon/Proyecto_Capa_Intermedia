<?php
 $id_prod = $_GET['id_prod'];

     $cnx = mysqli_connect("localhost", "root", "123456", "Progra_Web_CapaIntermedia");              
     $sql = "DELETE FROM PruebaProductos where id_prod like  $id_prod";
     $rta = mysqli_query($cnx, $sql);

     if(!$rta){
        echo "No se elimino!";
     }else{
        header("Location: carrito.php");
     }
     
?>