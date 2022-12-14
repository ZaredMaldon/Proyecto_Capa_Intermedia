<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAZED</title>
    <!-- CSS only -->
    <link rel="shortcut icon" href="img/logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/PaginaPrincipa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>


    <header>
        
        <nav>
            
            <a href="index.php">Inicio</a>
            <a href="View/Categorias/Categoria_add.php">Categorias</a>
            <a href="View/Compras.php">Compra</a>
            <a href="View/Consulta_ventas.php">Ventas</a>
            <a href="View/carrito/carrito.php">Carrito</a>
            <a href="View/Consulta_pedidos.php">Pedidos</a>
            <a href="#section6">Cotizaciones</a>
            <?php
            session_start();
            if(isset($_SESSION['userNow'])){
            ?>
            <a href="View/Perfil Usuario.php"><?php echo $_SESSION['userNow'][1]?></a>
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
            <?php }else{?>
            <a href="View/Login.html" id="Login-btn" class="link" >Login</a>
            <?php }?>

        </nav>
        
        <img  class="Logo" src="img/NOMBRE.png" width="180" height="75" alt="Imagen">

        <section class="textos-header">
            <h1>Los negocios son para siempre</h1>
            <h2>Online Shop</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">??Qui??nes somos?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Un buen dise??o hace la vida mejor. Somos expertos en dise??o web y entrenados en desarrollo web
                       para la industria digital. Ofrecemos un servicio personalizado, profesional y confiable
                       para los servicios que ofrecemos al p??blico.</p>
                    <h3><span>2</span>Valores</h3>
                    <p>Nuestros valores reflejan los de un negocio fundado por un equipo de programador y dise??ador, 
                       y un estilo ??nico que promueven.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Servicios</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Cotizar</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Vender</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Comprar</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>   
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Opiniones de nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/perfil1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Zared</h4>
                        <p>Esta increible, ahora tengo m??s ventas gracias a esta p??gina, recomendada!.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Fernanda</h4>
                        <p>Me encanta!, nunca hab??a tenido tanta facilidad para hacer mis compras en l??nea.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.svg" alt="">
                        <h3>Ventas</h3>
                        <p>Tenemos servicio de ventas para nuestros clientes de negocios.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion4.svg" alt="">
                        <h3>Compras</h3>
                        <p>Podr??s encontrar mucha variedad de productos en buena calidad.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion3.svg" alt="">
                        <h3>Cotizaciones</h3>
                        <p>Pide tu cotizaci??n sin compromiso de cualquier producto 
                           que sea de tu interes.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section6" class="contact">
            <div class="contact100-form-title container">
                <h3>Solicita tus</h3>
                <h2>Cotizaciones</h2>
                    <form id="form" method="POST" action="Controller/Correos.php" class="contact100-form validate-form">

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">id del producto a cotizar</span>
                            <input class="input100" type="text" name="productoid" placeholder="Escribe el c??digo del producto de tu interes">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Escribe tu email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Mensaje</span>
                            <textarea class="input100" name="message" placeholder="Escribe tu mensaje aqu??..."></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn" id="EnviarCorreo">
                                <span>
                                    Enviar
                                    <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>

                        <div class="container-contact100-form-btn response" style="margin-top: 30px;">
                            <p class="error">
                            </p>
                        </div>
                    </form>
                </div>
        </section>
    </main>

    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Tel??fono</h4>
                <p>(81)175 648 85</p>
                <p>(81)289 391 32</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>zaredmaldonado@gmail.com</p>
                <p>fer_mariafernanda@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Informaci??n</h4>
                <p>Esta compa??ia se dedica a dar facilidad para los usuarios</p>
                <p>a sus ventas, compras, cotizaciones, etc., les da una forma</p> 
                <p>m??s sencilla para llevar sus negocios.</p>
                    
            </div>
        </div>
        <h2 class="titulo-final">Copyright ??MAZED Company 2022. All Right Reserved By Zared Maldonado | Fernanda Mondragon</h2>
    </footer>
        <!-- JavaScript-->
        <script src="Script/jquery.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/SweetAlert.js"></script>
        <script src="js/Funciones.js"></script>
        
        
</body>

</html>