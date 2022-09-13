<?php
//Clase usuario para almacenar todos los datos consultados de la base de datos
class Usuario{
    private $imagen;
    private $nombre;
    private $apPat;
    private $apMat;
    private $usuario;
    private $contrasenia;
    private $rol;
    private $sexo;
    private $email;
    private $fechaNacimiento;
    private $fechaIngreso;

    public function _construct($img,$nom,$apP,$apM,$usu,$password,$roll,$genero,$correo,$fNac,$fIn)
    {
        $this->imagen=$img;
        $this->nombre=$nom;
        $this->apPat=$apP;
        $this->apMat=$apM;
        $this->usuario=$usu;
        $this->contrasenia=$password;
        $this->rol=$roll;
        $this->sexo=$genero;
        $this->email=$correo;
        $this->fechaNacimiento=$fNac;
        $this->fechaIngreso=$fIn;
    }
    //Getters
    public function getImagen(){
        return $this->imagen;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApPat(){
        return $this->apPat;
    }
    public function getApMat(){
        return $this->apMat;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function getRol(){
        return $this->rol;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function getFechaIngreso(){
        return $this->fechaIngreso;
    }

}
?>