<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista</title>
  <link rel="shortcut icon" href="../../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/prueba2.css">
  
   <script type="text/javascript">

    function agregar_comentario() {
        num1=document.getElementById('n1').value;
        document.getElementById('n2').value=num1;
        document.getElementById('n1').value="";
    }


    </script>
</head>

<body>

<header>
    <nav>
        <a href="../carrito/carrito.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger"><img src="../../img/Carrito.png" /></a>
        <a href="../../index.php">Inicio</a>
        <a href="../Compras.html">Compra</a>
        <a href="../Consulta_ventas.html">Ventas</a>
        <a href="../Consulta_pedidos.html">Pedidos</a>
       <!-- agregar el inicio de sesion despues -->
        <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
    </nav>
        <a href="../../index.php"><img class="avatar"
        src="../../img/NOMBRE.png" id="Logotipo" /></a>
   
    </header>

    <section id="blog-home" class="pt-5 mt-5 container">
        <h2 class="font-weight-bold pt-5">Lista de deseos</h2>
        <hr>
    </section>

    <div>
    <form action="../carrito/sp_insertar.php" method="POST">
           
      <section id="cart-container" class="container my-5">
        <table widh="100%">
            <thead>
                <tr>
                    <td > ID  </td>
                    <td>Remove</td>
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Add Carrito</td>
                </tr>
            </thead>
 
            <tbody>
              
                <?php 
                $cnx = mysqli_connect("localhost", "root", "123456", "Progra_Web_CapaIntermedia");
                
                $sql = "SELECT id_prod, Nombre_Lista, Precio FROM PruebaProductos order by id_prod desc";
                $rta = mysqli_query($cnx, $sql);
                While ($mostrar = mysqli_fetch_row($rta)){
                ?>
                    <tr>
                        <td><?php echo $mostrar['0'] ?></td>
                        <td>
                            <a href="../carrito/sp_eliminar_carrito.php? id_prod=<?php echo $mostrar['0'] ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <td><img src="../../img/img1.jpg" alt=""></td>                         
                        <td><?php echo $mostrar['1'] ?></td>
                        <td><?php echo $mostrar['2'] ?></td>
                        <!-- obtener datos -->
                        <td><a href="../carrito/carrito.php?
                        id_prod=<?php echo $mostrar['0']?> &
                        nombre=<?php echo $mostrar['1']?> &
                        precio=<?php echo $mostrar['2']?>
                        "><button class="btn-light" type="button"> Add </button></a></td>
                        
                    </tr>
                    <?php 
                }
                ?>
            
            </tbody>
        </table>
    </section>

            </form>
    </div>
    <script src="../../Script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>