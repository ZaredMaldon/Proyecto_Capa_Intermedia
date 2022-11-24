<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="shortcut icon" href="../../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/carrito2.css">
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">Inicio</a>
            <a href="../Compras.php">Compra</a>
            <a href="../Consulta_ventas.php">Ventas</a>
            <a href="../Consulta_pedidos.php">Pedidos</a>
            <!-- agregar el inicio de sesion despues -->
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
        </nav>
        <a href="../../index.php"><img class="avatar" src="../../img/NOMBRE.png" id="Logotipo" /></a>
    </header>

    <section id="blog-home" class="pt-5 mt-5 container">
        <h2 class="font-weight-bold pt-5">Listas de compras</h2>
        <hr>
    </section>

    <div>
        <form action="../carrito/sp_insertar.php" method="GET">

            <section id="cart-container" class="container my-5">
                <table widh="100%">
                    <thead>
                        <tr>
                            <td> ID </td>
                            <td>Eliminar</td>
                            <td>Imagen</td>
                            <td>Producto</td>
                            <td>Precio</td>

                        </tr>
                    </thead>
                    <?php session_start(); ?>
                    <tbody>
                        <?php
                       
                        if(isset($_SESSION['lista'])){
                        foreach ($_SESSION['lista'] as &$lista) { ?>
                            <tr>
                                <td><?php echo $lista[0]; ?></td>
                                <td>

                                <a id="<?php echo $lista[0]; //id para eliminar
                                ?>" onclick="EliminardeLista(this);"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <?php if ($lista[3] == null || $lista[3 == ""]) { //si no tiene 
                                ?>
                                    <td><img src="../../img/sinimagen.jpg" alt=""></td>
                                <?php } else { //si tiene imagen
                                ?>
                                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($lista[3]); ?>" alt=""></td>
                                <?php } ?>
                                <td><?php echo $lista[1]; //nombre 
                                    ?></td>
                                <td><?php echo '$' . $lista[2]; //precio
                                    ?></td>
                            </tr>
                        <?php 
                        }
                    }
                        
                        ?>
                    </tbody>
                </table>
            </section>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/SweetAlert.js"></script>
    <script>
 
</script>
    <script src="../../Script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
        function EliminardeLista(e) {
            var Id = e.getAttribute("id");
            console.log(Id);
            $.ajax({
                type: 'POST', //aqui puede ser igual get
                url: '../Lista/sp_eliminar_lista.php', //aqui va tu direccion donde esta tu funcion php
                data: {
                    opc: Id,
                    process: true
                }, //aqui tus datos
                success: function(data) {
                    alertaSweetSucces("Enhorabuena","se elimino correctamente el articulo de su lista","",false);
                    location.reload();
                },
            });
        }
    </script>
</body>

</html>