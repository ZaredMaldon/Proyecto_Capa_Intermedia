<?php
    require_once('ProductosDAO.php');
    $productosDAO=new ProductoDao();
    
    $destinatario='zaredmaldonado@gmail.com';
    $productoid=$_POST['productoid'];
    $mensaje=$_POST['message'];
    $email=$_POST['email'];
    
    $array[]=$productosDAO->mostrar_id_php($productoid);
    $asunto='Cotizacion de producto: '.$array[0][0]['Nombre'];
    $mensajeCompleto=$mensaje."\n Atentamente: ".$email;
    $header = "From:". $email." Enviado desde la página MAZED";

    //print_r($array[0][0]['Nombre']);
    //echo json_encode($destinatario.$asunto.$mensajeCompleto.$header);
    mail($destinatario,$asunto,$mensajeCompleto,$header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='../index.php'\",1000)</script>"

?>