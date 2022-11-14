<?php
require_once("../Model/Conexion.php");

class CategoriaDao{
    private $conexion;

    function __construct()
    {   
        $this->conexion=new Conectar();
        $this->conexion=$this->conexion->conectar();
        
    }

    public function agregar(){
        echo json_encode("Se registro exitosamente la categoria");
    }

    public function eliminar($_id){
        echo json_encode("Se elimino correctamente");
    }

    public function modificar(){
        echo json_encode("Se modifico correctamente");
    }
}
?>