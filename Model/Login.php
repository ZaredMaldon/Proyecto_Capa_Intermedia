<?php
$usuario=$_POST['UsuarioLogin'];
$password=$_POST['PasswordLogin'];
require_once("Conexion.php"); 
require_once("Usuario.php");

$conexion=new Conectar();
$con=$conexion->conectar();
$consulta="SELECT u.idUsuario,u.Usuario,u.Contrasenia,u.Fk_Rol,u.Email,p.Imagen,p.Nombres,p.APat,p.AMat,p.Fecha_Nacimiento,p.Sexo,p.Fecha_ingreso FROM Usuarios u
INNER JOIN Personas p on u.idUsuario=p.Fk_Usuario
where u.Usuario='$usuario' and u.Contrasenia='$password';";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);

session_start();
//$_SESSION['userNow']=new Usuario();

if($filas){

    while($fila=mysqli_fetch_array($resultado)){
        
        $_SESSION['userNow']= array($fila['idUsuario'],$fila['Usuario'],$fila['Contrasenia'],$fila['Fk_Rol'],$fila['Email'],$fila['Imagen'],$fila['Nombres'],$fila['APat'],$fila['AMat'],$fila['Fecha_Nacimiento'],$fila['Sexo'],$fila['Fecha_ingreso']);
    }
    header("location:../index.php");
}else{
    ?>
    <?php
    include("../View/Login.html");
    ?>
    <h1 class="bad">Error en la Autentificación</h1>
    <?php    
}
mysqli_free_result($resultado);
mysqli_close($con);

?>