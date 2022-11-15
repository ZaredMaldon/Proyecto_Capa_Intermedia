<?php
session_start();
//unset($_SESSION['userNow']);
if(session_status()==PHP_SESSION_ACTIVE){
    print_r($_SESSION['userNow'][1]) ;
}
/*
[0]=id
[1]=usuario
[2]=constrasenia
*/
?>