
$(document).ready(function(){

    $("#Pago").click(function(){
            Swal.fire({
                icon:'success',
                title:'Enhorabuena',
                text:'Pago realizado con éxito',
                confirmButtonText:'Seleccionar',
                confirmButtonColor:'rgb(103, 148, 54)'
                
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                  fetch('../View/carrito/Confirmarpago.php',{
                    method:'GET'
                })
                .then(res=>res.json())
                .then(data=>{
                    location.href="../index.php";
                })
                  
                } 
              });
    });

});

function alertaSweetSucces(titulo,mensaje,url,direccionamiento){//"Enhorabuena","hola","../index",true
  Swal.fire({
    icon:'success',
    title:titulo,
    text:mensaje,
    confirmButtonText:'Seleccionar',
    confirmButtonColor:'rgb(103, 148, 54)'
    
}).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      if(direccionamiento){
        location.href=url;
      }
      
    } 
  });
}

function alertaSweetSucces2(titulo,mensaje,direccionamiento){
  Swal.fire({
    icon:'success',
    title:titulo,
    text:mensaje,
    confirmButtonText:'Seleccionar',
    confirmButtonColor:'rgb(103, 148, 54)'
    
}).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      return direccionamiento;
      
    } 
  });
}
