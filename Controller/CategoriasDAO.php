<?php
require_once("../Model/Conexion.php"); 

class CategoriaDao{
    private $conexion;

    function __construct()
    {   
        $this->conexion=new Conectar();
        $this->conexion=$this->conexion->conectar();
        
    }

    public function agregar($Categoria, $Descripcion){

        try{
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Usuario(1,null,'{$Usuario}','{$Password}',{$Rol},'{$Email}','{$Imagen}','{$Nombres}','{$APat}','{$AMat}','{$Fecha_Nacimiento}',{$Sexo},'{$Tipo}');");
            if($execute){
                echo json_encode("1");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("0");
            //echo json_encode("Se registro exitosamente la categoria");
        }

    }

    public function eliminar($_id){
        echo json_encode("Se elimino correctamente");
    }

    public function modificar(){
        echo json_encode("Se modifico correctamente");
    }
}
?>