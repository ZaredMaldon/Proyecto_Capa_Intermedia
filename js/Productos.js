var formRegistro=document.getElementById('Productos_Registro');
var formUpdate=document.getElementById('Productos_Update');

formRegistro.addEventListener("submit",function (e) { 
    e.preventDefault();
    var datos=new FormData(formRegistro);
    //var cat=valorSelectFunc('categoria');

    $.ajax({
        method: "POST",
        url: "../Controller/Productos/AgregarP.php",
        data:datos,
        processData: false,
        contentType: false
    })
        .done(function( res ) {
            console.log(res);
            if(res==="1"){
                console.log("Registrado con exito!");
            }
        });
        
});

formUpdate.addEventListener("submit",function(e){
    e.preventDefault();
    var datos=new FormData(formUpdate);
    var cat=valorSelectFunc('categoria');
    var Name=datos.get('nombre');
    var Prec=datos.get('Precio');
    var Imagen_1=datos.get('Imagenes[0]');
    var Imagen_2=datos.get('Imagenes[1]');
    var Imagen_3=datos.get('Imagenes[2]');
    var _Video=datos.get(datos.get('Video'));
    var Cant=datos.get('Cantidad');
    var Val=datos.get('Valoracion');

    var url2=NewUrl(url,obtenerIdProducto());
    fetch(url2,{
        method:'PUT',
        body:JSON.stringify({Nombre:Name,Precio:Prec,Fk_Categoria:cat,Imagen1:Imagen_1,Imagen2:Imagen_2,Imagen3:Imagen_3,Video:_Video,Cantidad:Cant,Valoracion:Val,Ventas:10,Existencia:1}),
        headers:{
            "Content_type":"aplication/json"
        }
    })
    .then(res=>res.json())
    .then(data=>{
        //alert("Modificado");
        console.log(data);
        if(data){
            alert('Producto modificado con exito');
        }
    })
});


function mostrarTodos(){
    fetch(url)
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        return JSON.parse(data);
    })
    .catch(error=>console.log(error))
}

function obtenerIdProducto(){
    return 2;
}
