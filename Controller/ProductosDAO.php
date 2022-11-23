<?php


class ProductoDao{
    private $conexion;

    function __construct()
    {   
        $this->url='https://apiproductos.zambiaa.com/api/productos/';
        $this->ch=curl_init();
    }

    public function agregar($data_array){
        $data=http_build_query($data_array);
        curl_setopt($this->ch,CURLOPT_URL,$this->url);
        curl_setopt($this->ch,CURLOPT_POST,true);
        curl_setopt($this->ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            echo json_encode("1");
        }
        curl_close($this->ch);
    }

    public function eliminar($_id){
        $newUrl=$this->url.$_id;
        curl_setopt($this->ch,CURLOPT_URL,$newUrl);
        curl_setopt($this->ch,CURLOPT_CUSTOMREQUEST,'DELETE');
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            //$decoded=json_decode($respuesta);
            echo $respuesta;
        }
        curl_close($this->ch);
    }

    public function modificar($_id,$data_array){
        $newUrl=$this->url.$_id;
        $data=http_build_query($data_array);
        curl_setopt($this->ch,CURLOPT_URL,$newUrl);
        curl_setopt($this->ch,CURLOPT_CUSTOMREQUEST,'PUT');
        curl_setopt($this->ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            $decoded=json_decode($respuesta);
            print_r($decoded);
        }
        curl_close($this->ch);
    }

    public function mostrar(){
        curl_setopt($this->ch,CURLOPT_URL,$this->url);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            //respuesta contiene json
            //decoded contiene un objecto
            $decoded=json_decode($respuesta);
            //print_r($decoded[0]->{'id'});
            return $decoded;
        }
        curl_close($this->ch);
    }

    public function mostrar_id($_id){
        $newUrl=$this->url.$_id;
        curl_setopt($this->ch,CURLOPT_URL,$newUrl);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            $decoded=json_decode($respuesta);
            //print_r($respuesta);
            echo $respuesta;
        }
        curl_close($this->ch);
    }

    public function mostrar_id_php($_id){
        $newUrl=$this->url.$_id;
        curl_setopt($this->ch,CURLOPT_URL,$newUrl);
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);

        $respuesta=curl_exec($this->ch);

        if($e=curl_error($this->ch)){
            echo json_encode($e);
        }else{
            $decoded=json_decode($respuesta,true);
            return($decoded);
        }
        curl_close($this->ch);
    }
}
?>