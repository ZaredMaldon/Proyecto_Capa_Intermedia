<?php
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://localhost:82/api/index.php');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$respuesta=curl_exec($ch);
if(curl_errno($ch)){
    echo curl_error($ch);
}else{
    echo $respuesta;
}
curl_close($ch);
?>