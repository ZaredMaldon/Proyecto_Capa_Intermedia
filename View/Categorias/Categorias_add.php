<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categorias</title>
    <link rel="shortcut icon" href="../../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/PerfilUsuario.css">
    <link rel="stylesheet" href="../../css/PaginaPrincipal.css">
    <link rel="stylesheet" href="../../css/style.css"> 

</head> 

<body>
  <header>
    <nav>
        <a href="../carrito/carrito.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger"><img src="../../img/Carrito.png" /></a>
        <a href="../index.php">Inicio</a>
        <a href="../View/Compras.html">Compra</a>
        <a href="../View/Consulta_ventas.html">Ventas</a>
        <a href="../View/Consulta_pedidos.html">Pedidos</a>
        
        
       <!-- agregar el inicio de sesion despues -->
        <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
    </nav>

    <img class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">
  </header>

  <main>
  <div class="container datos"> 

    <h4 class="mb-3">CATEGORIAS</h4>

    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>

                                <form action="../Categorias/verlistas.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Categoria" placeholder="Categoria">
                                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-info table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Categoria</th>
                                        <th>Descripcion</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>    
                                    </tr>
                                </thead>

                                <tbody>
                                       
                                        <tr>
                                                <th><p href="">ID</p></th>
                                                <th> </th>
                                                <th> </th>
                                                <th> </th>    
                                                <th><a href="" class="btn btn-info">Editar</a></th>
                                                <th><a href="" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr>
                                        <?php 
                                            
                                        ?>
                                </table>
                        </div>
                    </div>  
            </div>
    </body>
       
    </form>

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

<script src="../../Script/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</script>
</body>
</html>