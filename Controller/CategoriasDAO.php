<?php
require_once("../../Model/Conexion.php");
 
class CategoriaDao{
    private $conexion;

    function __construct()
    {   
        $this->conexion=new Conectar();
        $this->conexion=$this->conexion->conectar();
        
    }

    public function agregar($Categoria,$Descripcion,$USUARIO){
       
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(1, null,'{$Categoria}','{$Descripcion}',{$USUARIO});");
            if($execute){
                echo json_encode("1");
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("0");
        } 

    }

    public function eliminar($_id){
        echo json_encode("Se elimino correctamente");
    }

    public function modificar($ID,$Categoria,$Descripcion){
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(3, {$ID},'{$Categoria}','{$Descripcion}',null);");
            if($execute){
<<<<<<< Updated upstream
                echo json_encode("1");
=======
                //echo json_encode("1");
>>>>>>> Stashed changes
                
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("0");
        } 

    }

    public function mostrar_id($ID){
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(4, {$ID},null,null,null);");
            if($execute){
                echo json_encode($execute);
                
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("0");
        } 

    }
}
?>