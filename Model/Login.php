<?php
$usuario=$_POST['UsuarioLogin'];
$password=$_POST['PasswordLogin'];
require_once("Conexion.php"); 

$conexion=new Conectar();
$con=$conexion->conectar();
$consulta="SELECT idUsuario,Usuario,Contrasenia FROM Usuarios where Usuario='$usuario' and Contrasenia='$password';";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:../index.html");
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