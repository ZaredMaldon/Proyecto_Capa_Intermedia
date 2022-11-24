<?php
   session_start();
   $id=$_POST['opc'];
   $i=0;
   foreach($_SESSION['lista'] as &$lista){
      if($carrito[0]==$id){
         unset($_SESSION['lista'][$i]);
         $i=0;
      }
      $i++; 
   }
   echo json_encode("Eliminado de la lista");
?>