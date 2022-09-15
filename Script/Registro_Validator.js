jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});
/*Metodos creados */
jQuery.validator.addMethod("Password", function(value, element) {
    // allow any non-whitespace characters as the host part
    return this.optional( element ) || /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/.test( value );
    }, 'La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un carácter no alfanumérico.');

jQuery.validator.addMethod("Combobox", function(value, element,param) {
    return value != '0';
    }, 'Selecciona una opción');
/*Llamada a los metodos de validacion */
$(".formulario").validate({

    rules: {
        UsuarioRegister: {
            required: true,
            minlength: 3
        },
        PasswordReg: {
            required: true,
            Password:true
        },
        PasswordReg2: {
            required: true,
            equalTo:"#PasswordReg"
        },
        Email: {
            required: true,
            email: true
        },
        ImagenUsuario:"required",
        Nombre:"required",
        ApPat:"required",
        ApMat:"required",
        Rol:{
            Combobox:true
        },
        Sexo:{
            Combobox:true
        },
        FechaNacimiento:"required"
    },
    // Specify validation error messages
    messages: {
        UsuarioRegister: {
            required: "Ingrese su nombre de usuario",
            minlength: "Debe tener al menos 3 caracteres"
        },
        PasswordReg: {
            required: "Ingrese la contraseña",
            minlength: "Ingrese al menos 8 caracteres"
        },
        PasswordReg2: {
            required: "Confirme la contraseña",
            minlength: "Ingrese al menos 8 caracteres",
            equalTo:"La confirmación de la contraseña debe ser igual"
        },
        Email: {
            required: "Ingrese un Email",
            email: "Email invalido"
        }
    }
});