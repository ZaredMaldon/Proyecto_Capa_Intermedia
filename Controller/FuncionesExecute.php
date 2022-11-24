<?php 
require_once("UsuarioDAO.php");

session_start();
$opc=0;
/*Este if sirve para capturar la opcion y que no de error si $_POST no tiene algun dato */
if(isset($_POST['opc'])){
    $opc=$_POST['opc'];
}else if(isset($_POST['UsuarioRegister'])){
    $opc=3;
}

//Este if sirve para llamar a las funciones por medio del $opc
if($opc==1){
    CerrarSession();
}else if($opc==2){
    datosUserNow();
}else if($opc==3){
    //echo json_encode("entre");
    modificar();
}



function CerrarSession(){
    
    if(session_status()==PHP_SESSION_ACTIVE){
        session_destroy();
        
        echo json_encode('Sesion cerrada');
    }else{
        echo json_encode("No hay session activa");
    }
}

function datosUserNow(){
    $array=array('id'=>$_SESSION['userNow'][0],'usuario'=>$_SESSION['userNow'][1],'contrasenia'=>$_SESSION['userNow'][2],'tipo'=>$_SESSION['userNow'][3],'idRol'=>$_SESSION['userNow'][4],'Rol'=>$_SESSION['userNow'][5],'Email'=>$_SESSION['userNow'][6],'Nombres'=>$_SESSION['userNow'][8],'ApPat'=>$_SESSION['userNow'][9],'ApMat'=>$_SESSION['userNow'][10],'Fecha de Nacimiento'=>$_SESSION['userNow'][11],'id_Sexo'=>$_SESSION['userNow'][12],'Sexo'=>$_SESSION['userNow'][13],'Fecha de ingreso'=>$_SESSION['userNow'][14],'Estatus'=>$_SESSION['userNow'][15]);
    $envio=json_encode($array);
    echo $envio;
}

function modificar(){
    //session_start();
    $userDao=new UsuarioDao();
    $_id=$_SESSION['userNow'][0];
    $Mssage="";
    $_Usuario = $_POST['UsuarioRegister'];
    $_Email = $_POST['Email'];
    $_Nombres = $_POST['Nombres'];
    $_APat = $_POST['ApPat'];
    $_AMat = $_POST['ApMat'];
    $_Password=$_POST['PasswordReg'];
    if($_FILES['foto']['tmp_name']){
        $_Imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $Mssage="entre";
    }else{
        $_Imagen=null;
        $Mssage="Ningun cambio en imagen";
    }
    $_Rol=$_REQUEST['Rol'];
    $_Tipo=$_REQUEST['Tipo'];

    $userDao->editar($_id,$_Usuario,$_Email,$_Nombres,$_APat,$_AMat,$_Password,$_Imagen,$_Rol,$_Tipo);
}


?>