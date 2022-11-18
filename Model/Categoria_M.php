<?php
//Clase usuario para almacenar todos los datos consultados de la base de datos
class Categoria{
    private $id;
    private $Categoria;
    private $_Descripcion;
   
    public function _construct($id,$catego,$desc)
    {
        $this->id=$id;
        $this->categoria=$catego;
        $this->descripcion=$desc;
    }
    //Getters
    public function getCatego(){
        return $this->categoria;
    }
    public function getDesc(){
        return $this->descripcion;
    }
    public function getId(){
        return $this->id;
    }

}
?>