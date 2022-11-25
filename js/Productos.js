var formRegistro=document.getElementById('Productos_Registro');
var formUpdate=document.getElementById('Productos_Update');
var url='https://apiproductos.zambiaa.com/api/productos';
formRegistro.addEventListener("submit",function (e) { 
    e.preventDefault();
    var datos=new FormData(formRegistro);
    fetch('../Controller/Productos/AgregarP.php',{
        method:'POST',
        body:datos,
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

});

formUpdate.addEventListener("submit",function(e){
    e.preventDefault();
    var datos=new FormData(formUpdate);
    //console.log(datos);
    //var cat=valorSelectFunc('categoria');
    fetch('../Controller/Productos/ModificarP.php',{
        method:'POST',
        body:datos
    })
    .then(res=>res.json())
    .then(data=>{
        //alert("Modificado");
        console.log(JSON.stringify(data));
        /* if(data){
            alert('Producto agregado con exito');
        } */
    })

   /*  $.ajax({
        method: "POST",
        url: "../Controller/Productos/ModificarP.php?id="+localStorage.getItem('id'),
        data:datos,
        processData: false,
        contentType: false
    })
        .done(function( res ) {
            console.log(res);
            if(res==="1"){
                alert("Modificado con exito!");
            }
        }); */
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


