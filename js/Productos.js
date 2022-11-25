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
            alertaSweetSucces('Enhorabuena!','Agregado con Exito','../View/Compras.php',true);
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
        alertaSweetSucces('Enhorabuena!','Modificado con Exito','../View/Compras.php',true);
        /* if(data){
            alert('Producto agregado con exito');
        } */
    })
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


