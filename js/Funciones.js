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

function readURL(input,idImg) {//Cambia la imagen de una etiquta img
    if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
      var reader = new FileReader(); //Leemos el contenido
      reader.onload = function(e) { //Al cargar el contenido lo pasamos como atributo de la imagen de arriba
        $(idImg).attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
    }
}



