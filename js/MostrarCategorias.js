function mostrar_Categoria_id(id){
    var obj={};
    fetch('../Controller/categoria/select.php',{
        method:'POST',
        body:id
    })
    .then(res=>res.json())
    .then(data=>{
       obj=JSON.parse(data);
       return obj;
    })
}

function mostrar_Categorias(){
    var obj={};
    fetch('../Controller/categoria/select.php')
    .then(res=>res.json())
    .then(data=>{
       obj=JSON.parse(data);
       return obj;
    })
}

//var objetonuevo=mostrar_Categorias();

