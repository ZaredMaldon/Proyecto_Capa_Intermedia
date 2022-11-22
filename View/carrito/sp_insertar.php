<?php
 $nombre = $_POST['nombre'];
 $precio = $_POST['precio'];


     $cnx = mysqli_connect("localhost", "root", "123456", "Progra_Web_CapaIntermedia");              
     $sql = "INSERT INTO PruebaProductos(Nombre_Lista, Precio) VALUES('$nombre', '$precio')";
     $rta = mysqli_query($cnx, $sql);

     if(!$rta){
        echo "No se inserto!";
     }else{
      echo "Se inserto!";
     }
     
?>