<?php
/* require_once("../Model/Conexion.php"); */
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

    //MODIFICAR CATEGORIAS

    public function modificar($ID,$Categoria,$Descripcion){
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(3, {$ID},'{$Categoria}','{$Descripcion}',null);");
            if($execute){
               /*  echo json_encode("1"); */
                echo "<script> alert('Se han actualizado los datos correctamente');window.location='../View/categorias_nuevas.php';</script>";
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("0");
        } 

    }

    public function mostrar_id($Id){
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(4, {$Id},null,null,null);");
            if($execute){
                while($fila=mysqli_fetch_array($execute)){
                    echo json_encode($fila);
                  /*   ?>
                    <script>
                        console.log(<?php echo json_encode($fila)?>);
                    </script>
                    <?php */ 
                }
                 
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("Exception: ".$e);
        } 

    }
 
    public function mostrar_all(){
        try{
           
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Categorias(5, null,null,null,null);");
            if($execute){
                while($fila=mysqli_fetch_array($execute)){
                    $array = array('id'=>$fila['idCategoria'],'Categoria'=> $fila['Categoria'],'Descripcion'=> $fila['Descripcion'],'Usuario'=> $fila['Usuario']);
                    
                }
               echo json_encode($array);
                 
            }else{
                echo json_encode("0");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            echo json_encode("Exception: ".$e);
        } 

    }
}
?>