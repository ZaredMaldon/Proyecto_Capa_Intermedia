var btncerrar=document.getElementById("btnCerrarP");
var formulario=document.getElementById("ModificarUsuario");
var div=document.getElementById("datos");

$('#file-input').change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
    readURL(this,'#imagenPopup');
});
function mostrarPopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function quitarPopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function mostrarPopup2(id){
    document.getElementById("popup-2").classList.toggle("active");
    if(div.childElementCount!=0){
        div.innerHTML='';
    }
   //../Controller/Productos/Mostrar_id.php
   $.ajax({
    type:'POST', //aqui puede ser igual get
    url: '../Controller/Productos/Mostrar_id.php',//aqui va tu direccion donde esta tu funcion php
    data: {opc:id,process:true},//aqui tus datos
    success:function(data){
        var datos=JSON.parse(data);
        datos.forEach(dato => {
            if(dato['id']==id){
                //div.removeChild(child);
                div.innerHTML+=`
                <div></div>
                <h4>id:${dato['id']}</h4>
                <label >Nombre:</label>
                <input type="text" value="${dato['Nombre']}" name="nombre" placeholder="Nombre"></br>
                <label >Precio:</label>
                <input type="text" value="${dato['Precio']}" name="Precio" placeholder="Precio"></br>
                <label >Categoria:</label>
                <select id="categoria">
                    <option value="1">Categoria 1</option>
                    <option value="2">Otra categoria</option>
                </select></br>
                <label >Imagenes:</label></br>
                <input type="file" name="Imagenes" id="idImagen" multiple></br>
                <label >Video:</label></br>
                <input type="file" name="Video"></br>
                <label >Cantidad:</label>
                <input type="text" value="${dato['Cantidad']}" name="Cantidad" placeholder="Cantidad"></br>
                <label >Valoracion:</label>
                <input type="text" value="${dato['Valoracion']}" name="Valoracion" placeholder="Valoracion"> </br>
                
                `;
            }
        });
        
        //window.location.assign("View/Login.html");//lo que devuelve tu archivo index.php
    },
    error:function(data){
        //var datos=JSON.parse(data);
        console.log(data);
    //lo que devuelve si falla tu archivo index.php
    }
});
}

function quitarPopup2(){
    
    document.getElementById("popup-2").classList.toggle("active");
}
function cambiarDatosUser(){

        var opc=3;
        formulario.addEventListener("submit",function(e){//debemos eliminar event listener
            e.preventDefault();
            var datos=new FormData(formulario);
            //var array={datos:datos,opc:3};
            //console.log(datos.get("foto"));
            
            fetch('../Controller/FuncionesExecute.php',{
                method:'POST',
                body:datos
            })
            .then(res=>res.json())
            .then(data=>{
                quitarPopup();
                alertaSweetSucces2("Modificado con exito","Se ha modificado su usuario","",true);
            })
        });
        return false;
}

function valorSelect2(_id){
    var select=document.getElementById(_id);
    var selectedOption = select.options[select.selectedIndex];
    return selectedOption.value;
}

function valorCalendar2(_id){
    var x = document.getElementById(_id);
    //var defaultVal = x.defaultValue;
    var currentVal = x.value;
    return currentVal
}

function readURL2(input) {//Cambia la imagen de una etiquta img
    if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
        console.log("entre");
        var reader = new FileReader(); //Leemos el contenido
        reader.readAsDataURL(input.files[0]);
        console.log(reader);
        console.log(input.files[0]['name']);
        
        return input.files[0]['name'];
    }
}