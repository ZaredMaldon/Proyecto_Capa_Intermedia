
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
                  location.href="EliminarCarrito.php";
                } 
              });

    
       
    });
});
