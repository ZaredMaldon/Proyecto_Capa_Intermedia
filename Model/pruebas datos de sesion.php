<?php
session_start();
//unset($_SESSION['userNow']);
if(session_status()==PHP_SESSION_ACTIVE){
   // print_r($_SESSION['userNow'][15]) ;
   $array=array('id'=>$_SESSION['userNow'][0],'usuario'=>$_SESSION['userNow'][1],'contrasenia'=>$_SESSION['userNow'][2],'tipo'=>$_SESSION['userNow'][3],'idRol'=>$_SESSION['userNow'][4],'Rol'=>$_SESSION['userNow'][5],'Email'=>$_SESSION['userNow'][6],'Nombres'=>$_SESSION['userNow'][8],'ApPat'=>$_SESSION['userNow'][9],'ApMat'=>$_SESSION['userNow'][10],'Fecha de Nacimiento'=>$_SESSION['userNow'][11],'id_Sexo'=>$_SESSION['userNow'][12],'Sexo'=>$_SESSION['userNow'][13],'Fecha de ingreso'=>$_SESSION['userNow'][14],'Estatus'=>$_SESSION['userNow'][15]);
   print_r(json_encode($array)) ;
   //print_r(json_encode($_SESSION['userNow'][4]));
}

//echo(json_encode($_POST));
/*
[0]=id
[1]=usuario
[2]=constrasenia
[3]=Tipo
[4]=Fk_Rol
[5]=Rol
[6]=Email
[7]=Imagen
[8]=Nombres
[9]=APat
[10]=AMat
[11]=Fecha_Nacimiento
[12]=id_Sexo
[13]=Sexo
[14]=Fecha_ingreso
[15]=Estatus(Si esta eliminado o no)
*/
?>