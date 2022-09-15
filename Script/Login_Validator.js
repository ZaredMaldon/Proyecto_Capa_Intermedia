$(document).ready(function () {
    $(".formulario").validate({
    
        rules: {
            UsuarioLogin: {
                required:true
            },
            PasswordLogin:{
                required:true
            }
        },
        // Specify validation error messages
        messages: {
            UsuarioLogin: {
                required:"Ingrese su nombre de usuario"
            },
            PasswordLogin:{
                required:"Ingrese la contraseña"
            }
        }
    
    });
    
    $("#Logginbtn").click(function () { 
        var usuario=$("UsuarioLogin").val();
        var password=$("PasswordLogin").val();
    });
    });