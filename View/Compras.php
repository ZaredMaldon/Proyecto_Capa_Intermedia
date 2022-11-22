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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <!-- CSS only -->
  <link rel="shortcut icon" href="../img/logo1.jpg" type="image/x-icon">

  <link rel="stylesheet" href="../CSS/Pedidos.css" />
  <link rel="stylesheet" href="../CSS/popup4.css">
  <link rel="stylesheet" href="../CSS/botones.css">
</head>

<body>



  <img class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">

  <section class="textos">
    <h1> Bienvenido a MAZED </h1>
    <h2> Online Shop</h2>
    <nav>
      <a href="../index.php">Inicio</a>
      <?php
      if ($_SESSION['userNow'][4] == 1) { //vendedor
      ?>
        <a href="Consulta_ventas.html">Ventas</a>
      <?php }
      if ($_SESSION['userNow'][4] == 2) { //cliente 
      ?>
        <a href="Consulta_pedidos.html">Compras</a>
      <?php } ?>
      <a href="Perfil Usuario.php"><?php echo $_SESSION['userNow'][1] ?></a>
      <a href="Login.html" id="Login-btn" class="link">Login</a>
    </nav>
  </section>

  <div class="producto-txt">
    <h1> Los productos más vendidos aquí </h1>
  </div>

  <div id="search-container">
    <input type="search" id="search-input" placeholder="Busque el nombre del producto aquí..." />
    <button id="search">Search</button>
    <button id="AgregarProdbtn" onclick="mostrarPopup();">Agrega Producto</button>
  </div>

  <div id="buttons">

    <button class="button-value" onclick="filterProduct('Todos')">
      Todos
    </button>

    <button class="button-value" onclick="filterProduct('Alimento')">
      Alimento
    </button>

    <button class="button-value" onclick="filterProduct('Ejercicio')">
      Ejercicio
    </button>

    <button class="button-value" onclick="filterProduct('Bebidas')">
      Bebidas
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
  <div id="products">

  </div>
  </div>
  <div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
      <div class="close-btn" id="btnCerrarP" onclick="quitarPopup()">&times;</div>
      <h1>Modifica tus datos</h1>
      <div class="Register">
        <h2>Registrar</h2>
        <form id="Productos_Registro" method="POST">
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="text" name="Precio" placeholder="Precio">
          <select id="categoria" name="categoria">
            <option value="1">Categoria 1</option>
            <option value="2">Otra categoria</option>
          </select>
          <input type="file" name="Imagenes" id="idImagen" multiple>
          <input type="file" name="Video">
          <input type="text" name="Cantidad" placeholder="Cantidad">
          <input type="text" name="Valoracion" placeholder="Valoracion">
          <input type="submit" id="buttonProductos" onclick="">
        </form>
      </div>

    </div>
  </div>
  <div class="popup" id="popup-2">
    <div class="overlay"></div>
    <div class="content">
      <div class="close-btn" id="btnCerrarP" onclick="quitarPopup2()">&times;</div>
      <h1>Modifica los datos</h1>
      <form id="Productos_Update" method="POST">
        <div id="datos">

        </div>
        <input type="submit" value="Modificar" class="button" id="Modibtn">
        <?php if ($_SESSION['userNow'][4] == 2) { //si es cliente puede agregar al carrito
        ?>
          <button type="button" class="button" id="Carritobtn">Carrito</button>
        <?php }
        ?>
      </form>

    </div>
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
  <script src="../Script/jquery.js"></script>
  <script src="../js/Funciones.js"></script>
  <script src="../js/Productos.js"></script>
  <script src="../js/pedidos.js"></script>
  <script src="../js/popup.js"></script>
  <script>
    function Cartas(products) {
      for (let i of products) {
        //console.log(i.category);
        //Creamos la tarjeta
        let card = document.createElement("div");
        //Card should have category and should stay hidden initially
        card.classList.add("card", i.category, "hide");
        /*     //image div
            let imgContainer = document.createElement("div");
            imgContainer.classList.add("image-container");
            //img tag
            let image = document.createElement("img");
            image.setAttribute("src",);
            imgContainer.appendChild(image);
            card.appendChild(imgContainer); */
        //container
        let container = document.createElement("div");
        container.classList.add("container");
        container.setAttribute("id", i.id);
        container.setAttribute("onclick", "obtenerProducto(this,1);")
        //fecha
        let fecha = document.createElement("h3");
        fecha.classList.add("product-fecha");
        fecha.innerText = i.Nombre.toUpperCase();
        container.appendChild(fecha);
        //Categoria
        let Categoria = document.createElement("h4");
        Categoria.classList.add("product-categoria");
        Categoria.innerText = i.price.toUpperCase();
        container.appendChild(Categoria);
        //nombre del prodcuto
        let name = document.createElement("h5");
        name.classList.add("product-name");
        name.innerText = i.category.toUpperCase();
        container.appendChild(name);
        //precio
        let price = document.createElement("h6");
        price.innerText = i.fyh;
        container.appendChild(price);
        //Calificación
        let Calificacion = document.createElement("h7");
        Calificacion.classList.add("product-cali");
        Calificacion.innerText = i.Calificacion;
        container.appendChild(Calificacion);

        let botonEliminar=document.createElement("a");
        botonEliminar.setAttribute("class","btn_Eliminar");
        botonEliminar.setAttribute("identity",i.id);
        botonEliminar.setAttribute("onclick","obtenerProducto(this,2);")
        //botonEliminar.classList.add('button');
        let imgEliminar=document.createElement("img");
        imgEliminar.setAttribute("src","../img/BoteBasura.svg");
        botonEliminar.appendChild(imgEliminar);
        container.appendChild(botonEliminar);

        card.appendChild(container);
        document.getElementById("products").appendChild(card);
      }
    }

    function obtenerProducto(element,opc) {
      if(opc==1){//ventana modificar
        var Id = element.getAttribute("id");
        mostrarPopup2(Id);
      }else if(opc==2){//eliminar
        var Id=element.getAttribute("identity");
        eliminarProducto(Id);
      }
      
      console.log(Id);
    }

    function eliminarProducto(id){
      
        $.ajax({
          type:'POST', //aqui puede ser igual get
          url: '../Controller/Productos/EliminarP.php',//aqui va tu direccion donde esta tu funcion php
          data: {opc:id,process:true},//aqui tus datos
          success:function(data){
              var datos=JSON.parse(data);
              console.log(datos);
              ajax_get_json();
              location.reload();
              
              //window.location.assign("View/Login.html");//lo que devuelve tu archivo index.php
          },
          error:function(data){
              //var datos=JSON.parse(data);
              console.log(data);
          //lo que devuelve si falla tu archivo index.php
          }
      });

    }

  </script>

</body>

</html>