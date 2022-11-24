<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAZED</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
   <!-- CSS only -->
    <link rel="shortcut icon" href="../img/logo1.jpg" type="image/x-icon">
    
    <link rel="stylesheet" href="../CSS/Pedidos.css"/>
  </head>

  <body>
    
    <nav>
      <a href="../index.php">Inicio</a>
        <a href="Compras.php">Compra</a>
        <a href="Consulta_ventas.php">Ventas</a>
        <a href="Consulta_pedidos.php">Pedidos</a>
        <a href="../View/Perfil Usuario.php"><?php echo $_SESSION['userNow'][1]?></a>
        <a href="../View/carrito/carrito.php">Carrito </a> 
    </nav>

        <img  class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">

    <section class="textos">
        <h1>Consulta de pedidos</h1>
        <h2>Online Shop</h2>
    </section>

    <div class="wrapper">

      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Busque el nombre del producto aquí.."
        />
        <button id="search">Search</button>
      </div>

      <div id="buttons">

        <button class="button-value" onclick="filterProduct('Todos')">
          Todos
        </button>

        <button class="button-value" onclick="filterProduct('Ropa')">
          Ropa
        </button>

        <button class="button-value" onclick="filterProduct('Hogar')">
          Hogar
        </button>

        <button class="button-value" onclick="filterProduct('Videojuegos')">
          Videojuegos
        </button>

        <button class="button-value" onclick="filterProduct('Electronicos')">
          Electronicos
        </button>

        <button class="button-value" onclick="filterProduct('Mascotas')">
          Mascotas
        </button>

        <button class="button-value" onclick="filterProduct('Belleza')">
          Belleza
        </button>


      </div>
      <div id="products"></div>
    </div>

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
    <!-- Script -->
   <script src="js/pedidos.js"></script> 
  </body>
</html>