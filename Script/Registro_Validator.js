$(document).ready(function () {
    $(".formulario").validate({
    
        rules: {
            UsuarioRegister: {
                required:true,
                minlength:3
            },
            PasswordReg:{
                required:true,
                minlength:8
            },
            PasswordReg2:{
                required:true,
                minlength:8
            }
        },
        // Specify validation error messages
        messages: {
            UsuarioRegister: {
                required:"Ingrese su nombre de usuario",
                minlength:"Debe tener al menos 3 caracteres"
            },
            PasswordReg:{
                required:"Ingrese la contraseña",
                minlength:"Ingrese al menos 8 caracteres"
            },
            PasswordReg2:{
                required:"Ingrese la contraseña",
                minlength:"Ingrese al menos 8 caracteres"
            }
        }
    
    });
    
    $("#BotonRegistro").click(function () { 
        var usuario=$("UsuarioRegister").val();
        var password=$("PasswordReg").val();
        var password2=$("PasswordReg2").val();
    });

    });