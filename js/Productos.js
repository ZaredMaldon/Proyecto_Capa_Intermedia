var formRegistro=document.getElementById('Productos_Registro');
var formUpdate=document.getElementById('Productos_Update');
var url='https://apiproductos.zambiaa.com/api/productos';
formRegistro.addEventListener("submit",function (e) { 
    e.preventDefault();
    var datos=new FormData(formRegistro);
    //var cat=valorSelectFunc('categoria');
    var cat=valorSelectFunc('categoria');
    var Name=datos.get('nombre');
    var Prec=datos.get('Precio');
    var Imagen_1=datos.get('Imagenes');
    var Imagen_2=null;
    var Imagen_3=null;
    var _Video=datos.get(datos.get('Video'));
    var Cant=datos.get('Cantidad');
    var Val=datos.get('Valoracion');
    //console.log(Name,Prec,Cant,Val);
    fetch('../Controller/Productos/AgregarP.php',{
        method:'POST',
        body:{nombre:Name,Precio:Prec,Fk_Categoria:cat,Imagen1:Imagen_1,Imagen2:Imagen_2,Imagen3:Imagen_3,Video:_Video,Cantidad:Cant,Valoracion:Val,Ventas:10,Existencia:1},
        headers:{
            "Content_type":"aplication/json"
        }
    })
    //.then(res=>res.json())
    .then(data=>{
        //alert("Modificado");
        console.log(data);
        if(data){
            alert('Producto agregado con exito');
        }
    })

   /*  fetch(url,{
        method:'POST',
        data:datos
    })
    .then(data=>{
        console.log(data);
        //return JSON.parse(data);
    })
    .catch(error=>console.log(error))
 */
    // $.ajax({
    //     method: "POST",
    //     url: url,
    //     data:datos,
    //     processData: false,
    //     contentType: false
    // })
    //     .done(function( res ) {
    //         console.log(res);
    //         /* if(res=="1"){
    //             console.log("Registrado con exito!");
    //         } */
    //     });
        
});

formUpdate.addEventListener("submit",function(e){
    e.preventDefault();
    var datos=new FormData(formRegistro);
    //var cat=valorSelectFunc('categoria');

    $.ajax({
        method: "PUT",
        url: "../Controller/Productos/ModificarP.php?id="+localStorage.getItem('id'),
        data:datos,
        processData: false,
        contentType: false
    })
        .done(function( res ) {
            console.log(res);
            if(res==="1"){
                console.log("Modificado con exito!");
            }
        });
});


function mostrarTodos(){
    fetch('https://apiproductos.zambiaa.com/api/productos')
    .then(response=>response.json())
    .then(data=>{
        console.log(data);
        return JSON.parse(data);
    })
    .catch(error=>console.log(error))
}


