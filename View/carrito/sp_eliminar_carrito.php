<?php
   session_start();
   $id=$_POST['opc'];
   $i=0;
   foreach($_SESSION['carrito'] as &$carrito){
      if($carrito[0]==$id){
         unset($_SESSION['carrito'][$i]);
         $i=0;
      }
      $i++;
   }
   echo json_encode("Eliminado del carrito");
?>