<?php
//Aqui van las recuperaciones de datos para el usuario de la base de datos
require_once("Conexion.php");
require_once("../Model/Usuario.php");
class UsuarioDao{
    public $Usuario= new Usuario();
    public $con=Conectar::conectar();

    public function agregar($_usuario){
        try{

        }catch (Exception $e){
            
        }
        return true;
    }
}
?>