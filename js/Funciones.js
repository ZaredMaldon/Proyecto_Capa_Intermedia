function salir(){
    $.ajax({
        type:'POST', //aqui puede ser igual get
        url: 'http://localhost:82/Proyecto%20Capa%20Intermedia/Proyecto_Capa_Intermedia/Controller/FuncionesExecute.php',//aqui va tu direccion donde esta tu funcion php
        data: {opc:1,process:true},//aqui tus datos
        success:function(data){
            //var datos=JSON.parse(data);
            console.log(data);
            window.location.assign("View/Login.html");//lo que devuelve tu archivo index.php
        },
        error:function(data){
            //var datos=JSON.parse(data);
            console.log(data);
        //lo que devuelve si falla tu archivo index.php
        }
    });
}
function cambiarDatosUser(){
    var formulario=document.getElementById('ModificarUsuario');


    formulario.addEventListener("submit",function(){
    
        var datos=new FormData(formulario);
        
        //Enviamos al php la info
        $.ajax({
            type:'POST', //aqui puede ser igual get
            url: '../Controller/FuncionesExecute.php',//aqui va tu direccion donde esta tu funcion php
            data: {opc:3},//aqui tus datos
            success:function(data){
                console.log(data);
            },
            error:function(data){
                //var datos=JSON.parse(data);
                console.log('fallo');
            //lo que devuelve si falla tu archivo index.php
            }
        });
    });
}