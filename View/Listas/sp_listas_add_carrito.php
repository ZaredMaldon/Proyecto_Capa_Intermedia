<?php
 $id_prod = $_POST['id_prod'];

     $cnx = mysqli_connect("localhost", "root", "123456", "Progra_Web_CapaIntermedia");              
     $sql = " SELECT id_prod, Nombre_Lista, Precio FROM PruebaProductos where id_prod like $id_prod";
    
     $rta = mysqli_query($cnx, $sql);

     if(!$rta){
        echo "No se agrego!";
     }else{
        header("Location: ../carrito/carrito.php");
     }
     
?>

<?php
 $nombre = $_POST['nombre'];
 $precio = $_POST['precio'];


     $cnx = mysqli_connect("localhost", "root", "123456", "Progra_Web_CapaIntermedia");              
     $sql = "INSERT INTO Carrito VALUES('$nombre', '$precio')";
     $rta = mysqli_query($cnx, $sql);

     if(!$rta){
        echo "No se inserto!";
     }else{
        header("Location: carrito.php");
     }
     
?>