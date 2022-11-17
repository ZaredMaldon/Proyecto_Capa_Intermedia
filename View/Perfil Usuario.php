<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="shortcut icon" href="../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/PerfilUsuario.css">
    <link rel="stylesheet" href="../css/popup3.css">
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="../NUEVOS HTML/Compras.html">Compra</a>
            <a href="../NUEVOS HTML/Consulta_ventas.html">Ventas</a>
            <a href="../NUEVOS HTML/Consulta_pedidos.html">Compras</a>
            <?php session_start(); ?>
            <a href="#"><?php echo $_SESSION['userNow'][1]; ?></a>
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
        </nav>

        <img class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">
    </header>
    <main>
        <div class="container datos">
            <div class="imagen">
                <img src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['userNow'][7]); ?>" width="250" height="250" alt="Logotipo" id="Fotoperfil">
            </div>
            <div class="datos_personales">
                <h4>Rol: <?php echo $_SESSION['userNow'][5];  ?> </h4>
                <h1>Nombre completo: <?php echo $_SESSION['userNow'][8] . " " . $_SESSION['userNow'][9] . " " . $_SESSION['userNow'][10];  ?></h1>
                <h2>Usuario: <?php echo $_SESSION['userNow'][1];  ?></h2>
                <h3>Email: <?php echo $_SESSION['userNow'][6];  ?></h3>
                <h3>Sexo: <?php echo $_SESSION['userNow'][13];  ?></h3>
                <h3>Fecha de Nacimiento: <?php echo $_SESSION['userNow'][11];  ?></h3>
                <h4>Eres miembro desde: <?php echo $_SESSION['userNow'][14];  ?></h4>
                <button id="CambiarDatos" onclick="mostrarPopup();">Cambiar datos</button>
            </div>
        </div>

        <div id="sectionGrupo">
            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close-btn" id="btnCerrarP" onclick="quitarPopup()">&times;</div>
                    <h1>Modifica tus datos</h1>
                    
                    <form id="ModificarUsuario" class="formulario" method="POST" action="">

                        <div class="contenedor">

                        <div class="image-upload input-contenedor">
                            <label for="file-input">
                                <img id="imagenPopup" name="ImagenUsuario" src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['userNow'][7]); ?>" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" > 
                            </label>
                            <input id="file-input" name="foto" type="File"/>
                        </div>

                            <div class="input-contenedor">
                                <i class="fas fa-user icon"></i>
                                <input type="text" placeholder="Nombre" name="Nombres" value="<?php  echo $_SESSION['userNow'][8] ?>" id="Nombres">
                                <input id="ApPat" type="text" placeholder="Apellido Paterno" value="<?php  echo $_SESSION['userNow'][9] ?>" name="ApPat" class="subtext2">
                                <input id="ApMat" type="text" placeholder="Apellido Materno" value="<?php  echo $_SESSION['userNow'][10] ?>" name="ApMat" class="subtext2">
                            </div>


                            <div class="input-contenedor">
                                <i class="fas fa-key icon"></i>
                                <input id="Email" type="email" value="<?php  echo $_SESSION['userNow'][6] ?>" placeholder="Email" name="Email">
                            </div>

                            <div class="input-contenedor">
                                <div class="input-contenedor">
                                    <i class="fas fa-id-badge icon"></i>
                                    <input type="text" placeholder="Usuario" value="<?php  echo $_SESSION['userNow'][1] ?>" id="UsuarioRegister" name="UsuarioRegister">

                                </div>
                                <i class="fas fa-key icon"></i>
                                <input type="password" autocomplete="on" placeholder="Contraseña" value="<?php  echo $_SESSION['userNow'][2] ?>" name="PasswordReg" id="PasswordReg">
                                <input type="password" autocomplete="on" placeholder="Nueva Contraseña" value="<?php  echo $_SESSION['userNow'][2] ?>" class="subtext1" name="PasswordReg2" id="PasswordReg2">

                            </div>
                            </br>
                            <div class="input-contenedor">
                                <i class="fas fa-key icon"></i>

                                <label for="Roles" class="title">Rol:</label>
                                <select name="Rol" id="Rol">
                                    <?php if($_SESSION['userNow'][4]==1){ ?>
                                        <option value="0">Select</option>
                                        <option value="1" selected>Vendedor</option>
                                        <option value="2">Cliente</option>
                                        <option value="3">Administrador</option>
                                    <?php }else if($_SESSION['userNow'][4]==2){ ?>
                                        <option value="0">Select</option>
                                        <option value="1">Vendedor</option>
                                        <option value="2" selected>Cliente</option>
                                        <option value="3">Administrador</option>
                                    <?php }else if($_SESSION['userNow'][4]==3){ ?>
                                        <option value="0" select>Select</option>
                                        <option value="1">Vendedor</option>
                                        <option value="2">Cliente</option>
                                        <option value="3" selected>Administrador</option>
                                    <?php } ?>
                                </select>

                                <label for="Tipo" class="title">Tipo:</label>
                                <select name="Tipo" id="Tipo" >
                                <?php if($_SESSION['userNow'][3]=="Publico"){?>
                                    <option value="0">Select</option>
                                    <option value="Publico" selected>Publico</option>
                                    <option value="Privado">Privado</option>
                                
                                <?php }else if($_SESSION['userNow'][3]=="Privado"){?>
                                    <option value="0">Select</option>
                                    <option value="Publico">Publico</option>
                                    <option value="Privado" selected>Privado</option>
                                <?php } ?>
                                </select>

                            </div>
                            </br><input type="submit" value="Cambiar" class="buttonPopup" id="BotonRegistro" onclick="cambiarDatosUser();">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>(81)175 648 85</p>
                <p>(81)289 391 32</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>zaredmaldonado@gmail.com</p>
                <p>fer_mariafernanda@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Información</h4>
                <p>Esta compañia se dedica a dar facilidad para los usuarios</p>
                <p>a sus ventas, compras, cotizaciones, etc., les da una forma</p>
                <p>más sencilla para llevar sus negocios.</p>

            </div>
        </div>
        <h2 class="titulo-final">Copyright ©MAZED Company 2022. All Right Reserved By Zared Maldonado | Fernanda Mondragon</h2>
    </footer>
    <script src="../Script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="../js/popup.js"></script>
    <script src="../js/Funciones.js"></script>
</body>

</html>