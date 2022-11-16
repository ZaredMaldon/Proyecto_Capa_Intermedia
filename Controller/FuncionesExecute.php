<?php 
$opc=$_POST['opc'];


if($opc==1){
    CerrarSession();
}else if($opc==2){
    datosUserNow();
}else if($opc==3){
    modificar();
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

function datosUserNow(){
    session_start();
    $array=array('id'=>$_SESSION['userNow'][0],'usuario'=>$_SESSION['userNow'][1],'contrasenia'=>$_SESSION['userNow'][2],'tipo'=>$_SESSION['userNow'][3],'idRol'=>$_SESSION['userNow'][4],'Rol'=>$_SESSION['userNow'][5],'Email'=>$_SESSION['userNow'][6],'Nombres'=>$_SESSION['userNow'][8],'ApPat'=>$_SESSION['userNow'][9],'ApMat'=>$_SESSION['userNow'][10],'Fecha de Nacimiento'=>$_SESSION['userNow'][11],'id_Sexo'=>$_SESSION['userNow'][12],'Sexo'=>$_SESSION['userNow'][13],'Fecha de ingreso'=>$_SESSION['userNow'][14],'Estatus'=>$_SESSION['userNow'][15]);
    $envio=json_encode($array);
    echo $envio;
}

function modificar(){
    $_Usuario = $_POST['UsuarioRegister'];
    $_Email = $_POST['Email'];
    $_Nombres = $_POST['Nombre'];
    $_APat = $_POST['ApPat'];
    $_AMat = $_POST['ApMat'];
    $_Password=$_POST['PasswordReg'];
    $_Password2=$_POST['PasswordReg2'];
    $_Imagen = addslashes(file_get_contents($_FILES['ImagenUsuario']['tmp_name']));
    $_Fecha_Nacimiento = $_POST['FechaNacimiento'];
    $_Sexo = $_REQUEST['Sexo'];
    $_Rol=$_REQUEST['Rol'];
    $_Tipo=$_REQUEST['Tipo'];

    echo "holi";
}
?>