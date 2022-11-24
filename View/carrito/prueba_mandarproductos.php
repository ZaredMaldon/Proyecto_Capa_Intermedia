<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertar nuevo</title>
</head>
<body>
 
<!-- solo es una de prueba donde agarra datos  -->
    <form action="sp_insertar.php" method="post">
        <h1>PRODUCTO</h1>
        <img src="../img/logo1.png" width="250" height="250" alt="Logotipo" id="LogoRegistro">

            <br class="input-contenedor">
                <i class="fas fa-user icon"></i>

                <input type="text" placeholder="Nombre" name="nombre">
                <p>$ <input type="text" placeholder="precio" name="precio"></p>
         
            <input type="submit" value="Guardar" class="button" id="Botonmandar">
    </form>
</body>
</html>