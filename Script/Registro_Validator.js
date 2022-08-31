$(document).ready(function () {
    $(".formulario").validate({
    
        rules: {
            UsuarioLogin: {
                required:true,
                minlength:3
            },
            PasswordLogin:{
                required:true,
                minlength:8
            }
        },
        // Specify validation error messages
        messages: {
            UsuarioLogin: {
                required:"Ingrese su nombre de usuario",
                minlength:"Debe tener al menos 3 caracteres"
            },
            PasswordLogin:{
                required:"Ingrese la contraseña",
                minlength:"Ingrese al menos 8 caracteres"
            }
        }
    
    });
    
    $("#Logginbtn").click(function () { 
        var usuario=$("UsuarioLogin").val();
        var password=$("PasswordLogin").val();
    });
    });