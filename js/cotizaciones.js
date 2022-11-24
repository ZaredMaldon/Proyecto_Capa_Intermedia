var Enviar=document.getElementById("EnviarCorreo");
var formilario=document.getElementById('form');
Enviar.addEventListener("submit",function(){
    
    var datos=new FormData(formulario);
    var productoid=datos.get('productoid');
    var email=datos.get('email');
    var message=datos.get('message');

    $.ajax({
        type:'POST', //aqui puede ser igual get
        url: '../Controller/Correos.php',//aqui va tu direccion donde esta tu funcion php 
        data: {productoid:productoid,email:email,message:message},//aqui tus datos
        success:function(data){
            //var datos=JSON.parse(data);
            console.log(data);
            
        },
        error:function(data){
            //var datos=JSON.parse(data);
            console.log(data);
        //lo que devuelve si falla tu archivo index.php
        }
    });

});