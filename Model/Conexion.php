<?php

    class Conectar{
        public function conectar(){
            try{
                $user="u840845621_root";
                //$password="Zomrromr28122801";
                $password="v:F|C1r6W#";
                $server="31.170.160.1";
                $DataBase="u840845621_pw_cintermedia";

                $conectar=new mysqli($server, $user, $password, $DataBase);

            }catch(Exception $e){
                die("Error" . $e->getMessage());
                echo "Linea del error" . $e->getLine();
            }

            return $conectar;
        }

    }

?>