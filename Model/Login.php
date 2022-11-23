<?php
$usuario=$_POST['UsuarioLogin'];
$password=$_POST['PasswordLogin'];
require_once("Conexion.php"); 
require_once("Usuario.php");

$conexion=new Conectar();
$con=$conexion->conectar();
$consulta="SELECT u.idUsuario,u.Usuario,u.Contrasenia,u.Tipo,u.Fk_Rol,r.Rol,u.Email,p.Imagen,p.Nombres,p.APat,p.AMat,p.Fecha_Nacimiento,p.Sexo as idSexo,s.Sexo,p.Fecha_ingreso,u.Estatus FROM usuarios u
INNER JOIN personas p on u.idUsuario=p.Fk_Usuario
INNER JOIN roles r on u.Fk_Rol=r.idrol
INNER JOIN sexo s on p.sexo=s.idsexo
where (Usuario='$usuario' and Contrasenia='$password') and (Estatus=1);";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);

session_start();
//$_SESSION['userNow']=new Usuario();

if($filas){
    while($fila=mysqli_fetch_array($resultado)){
        $_SESSION['userNow']= array($fila['idUsuario'],$fila['Usuario'],$fila['Contrasenia'],$fila['Tipo'],$fila['Fk_Rol'],$fila['Rol'],$fila['Email'],$fila['Imagen'],$fila['Nombres'],$fila['APat'],$fila['AMat'],$fila['Fecha_Nacimiento'],$fila['idSexo'],$fila['Sexo'],$fila['Fecha_ingreso'],$fila['Estatus']);
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