<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAZED</title>
    <!-- CSS only -->
    <link rel="shortcut icon" href="img/logo1.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>


    <header>
        
        <nav>
            <a href="index.html">Inicio</a>
            <a href="View/Compras.html">Compra</a>
            <a href="View/Consulta_ventas.html">Ventas</a>
            <a href="View/Consulta_pedidos.html">Compras</a>
            <?php
            session_start();
            if(isset($_SESSION['userNow'])){
            ?>
            <a href="View/Perfil Usuario.html"><?php echo $_SESSION['userNow'][1]?></a>
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Salir</a>
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
            <h2 class="titulo">¿Quiénes somos?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Los mejores productos</h3>
                    <p>Un buen diseño hace la vida mejor. Somos expertos en diseño web y entrenados en desarrollo web
                       para la industria digital. Ofrecemos un servicio personalizado, profesional y confiable
                       para los servicios que ofrecemos al público.</p>
                    <h3><span>2</span>Valores</h3>
                    <p>Nuestros valores reflejan los de un negocio fundado por un equipo de programador y diseñador, 
                       y un estilo único que promueven.</p>
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
                        <p>Esta increible, ahora tengo más ventas gracias a esta página, recomendada!.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/perfil2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Fernanda</h4>
                        <p>Me encanta!, nunca había tenido tanta facilidad para hacer mis compras en línea.</p>
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
                        <p>Podrás encontrar mucha variedad de productos en buena calidad.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion3.svg" alt="">
                        <h3>Cotizaciones</h3>
                        <p>Pide tu cotización sin compromiso de cualquier producto 
                           que sea de tu interes.</p>
                    </div>
                </div>
            </div>
        </section>
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
        <!-- JavaScript-->
        <script src="Script/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="js/Funciones.js"></script>
        
        
</body>

</html>