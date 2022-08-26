<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de Página</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="../CSS/Normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/PaginaGeneral.css">
    <link rel="stylesheet" href="../CSS/BarraDeNavegacion.css">
    <link rel="stylesheet" href="../CSS/Footer.css">


</head>

<body>
    <header class="header">
        <div class="container logo-nav-container">
            <a href="#" class="logo">LOGO</a>

            <div class="menu_bar">
                <a href="#" class="btn bt-menu"><span><img src="../images/menu.svg" alt="">Menu</span> </a>
            </div>

            <nav class="navigation">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Comprar</a></li>
                    <li><a href="#">Vender</a></li>
                    <li><a href="#">Cotizar</a></li>
                    <li><a href="#">Nombre</a></li>
                    <li><a href="#" id="Login-btn" class="btn">Login</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <main class="main">
        <div class="container Registro">
            <form id="Form-Register">

                <div class="form-group DatosPersonales">
                    <input type="text" placeholder="Nombres">
                    <input type="text" placeholder="Apellido Paterno">
                    <input type="text" placeholder="Apellido Materno">
                    <input type="tel" placeholder="Teléfono">
                    <input type="date" placeholder="Fecha de Nacimiento" max="2004/12/31" min="1900/01/01"><br>             
                    <input type="radio" name="gender" value="male" checked> Hombre<br>
                    <input type="radio" name="gender" value="female"> Mujer<br>
                    <input type="radio" name="gender" value="other"> Otro<br>
                </div>
                
                <div class="form-group Usuario">
                    <input type="text" placeholder="Usuario">
                    <input type="email" placeholder="Email">
                    <input type="password" placeholder="Contraseña"><br>
                    <p>Selecciona una imagen:</p> <input type="file" name="myFile">

                    <p>Tipo de Usuario:</p>
                    <select name="select">
                    <option value="value1">Público</option>
                    <option value="value2">Privado</option>
                    </select>
                </div>
                
            </form>
        </div>
    </main>


    <dialog class="modalg" id="modal">
        <form method="dialog">
            <div class="form-group">
                <img src="../images/logo temporal.PNG" alt="Logotipo">
                <h1 id="NombrePagina_id">Nombre</h1>                
            </div>
            <input type="text" placeholder="Usuario">
            <input type="text" placeholder="Contraseña">
            <small id="Recomendation" class="form-text text-muted">Inicia sesión para que puedas seguir comprando</small>
            <button class="btn btn-dark" type="submit">Login</button>
            <small id="Registrate" class="form-text text-muted">¿No tienes cuenta?<a href="../view/Registro.php"> Registrate</a></small>
            <button class="btn btn-dark" id="CerrarModal-btn"> Cerrar</button>
        </form>
        
    </dialog>

    <!-- Footer Start -->
    <footer class="footer-area">
        <div class="container main-footer">

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget pr-60">
                        <div class="footer-logo pb-25">
                            <div class="col-md-4 noPadding text-center">
                                <a class="" href="index.php"><img class="img-responsive" src="#" /></a>
                            </div>
                            <div class="col-md-8 noPadding logo-text">

                                <p class="colorfullText">Tendra</p>
                            </div>
                        </div>
                        <p>Es un placer para nosotros realizar una mejora visual a la página Tendra,gracias a esto
                            surgió la idea para este proyecto.</p>
                        <div class="footer-social">
                            <ul class="list-group">
                                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>Información</h3>
                        <p class="lock"></p>
                        <ul>
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2 text-center">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href="#section0">
                                            <p>Sobre nosotros</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href="">
                                            <p>Top Sellers</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href="">
                                            <p>Our Blog</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href="">
                                            <p>New Products</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="footer-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <div class="footer-icon"></div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <a href="">
                                            <p>Secure Shopping</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-widget">
                        <h3>Contacto</h3>
                        <p class="lock"></p>

                        <p>(81)175 648 85<br></p>
                        <ul>
                            <li class="address-section">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10 single-widget-description noPadding">
                                        <span>zaredmaldonado@gmail.com</span>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Copyright ©Monza Company 2022. All Right Reserved By Zared Maldonado y Fernanda Mondragon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript-->
    <script src="../Script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="../Script/ModalLogin.js"></script>
</body>

</html>