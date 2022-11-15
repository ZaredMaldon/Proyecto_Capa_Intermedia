<?php 
$opc=1;

if($opc==1){
    CerrarSession();
}


function CerrarSession(){
    session_start();
    if(session_status()==PHP_SESSION_ACTIVE){
        session_destroy();
        echo json_encode('Sesion cerrada');
    }else{
        echo json_encode("No hay session activa");
    }
}
?>