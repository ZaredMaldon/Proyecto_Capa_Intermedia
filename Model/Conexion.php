<?php
/*  
<?php
    include(Conexion.php); 
    $con=conectar();
    echo "Se realizo exitosamente la conexion a la base de datos"
?>
*/
    class Conectar{
        public function conectar(){
            try{
                $user="root";
                $password="Zomrromr28122801";
                //$password="Zomrromr";
                $server="localhost";
                $DataBase="Progra_Web_CapaIntermedia";

                $conectar=new mysqli($server, $user, $password, $DataBase);

            }catch(Exception $e){
                die("Error" . $e->getMessage());
                echo "Linea del error" . $e->getLine();
            }

            return $conectar;
        }

    }

?>