var formRegistro=document.getElementById('Productos_Registro');
var formUpdate=document.getElementById('Productos_Update');

formRegistro.addEventListener("submit",function (e) { 
    e.preventDefault();
    var datos=new FormData(formRegistro);
    //var cat=valorSelectFunc('categoria');

    fetch('../Controller/Productos/AgregarP.php',{
        method:'POST',
        data:datos
    })
    //.then(response=>response.json())
    .then(data=>{
        console.log(data);
        //return JSON.parse(data);
    })
    .catch(error=>console.log(error))

    /* $.ajax({
        method: "POST",
        url: "../Controller/Productos/AgregarP.php",
        data:datos,
        processData: false,
        contentType: false
    })
        .done(function( res ) {
            console.log(res);
            if(res=="1"){
                console.log("Registrado con exito!");
            }
        }); */
        
});

formUpdate.addEventListener("submit",function(e){
    e.preventDefault();
    var datos=new FormData(formRegistro);
    //var cat=valorSelectFunc('categoria');

    $.ajax({
        method: "POST",
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


