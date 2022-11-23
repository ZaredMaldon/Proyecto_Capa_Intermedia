<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="shortcut icon" href="../../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/carrito2.css">

    <script type="text/javascript">
        function agregar_comentario() {
            num1 = document.getElementById('n1').value;
            document.getElementById('n2').value = num1;
            document.getElementById('n1').value = "";
        }
    </script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <style>
        
        /* Media query for mobile viewport */
        @media screen and (max-width: 400px) {
            #paypal-button-container {
                width: 100%;
            }
        }
        
        /* Media query for desktop viewport */
        @media screen and (min-width: 400px) {
            #paypal-button-container {
                width: 250px;
                display: inline-block;
            }
        }
        
    </style>
</head>

<body>

    <header>
        <nav>

            <a href="../../index.php">Inicio</a>
            <a href="../Compras.html">Compra</a>
            <a href="../Consulta_ventas.html">Ventas</a>
            <a href="../Consulta_pedidos.html">Pedidos</a>
            <!-- agregar el inicio de sesion despues -->
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
        </nav>
        <a href="../../index.php"><img class="avatar" src="../../img/NOMBRE.png" id="Logotipo" /></a>

    </header>

    <section id="blog-home" class="pt-5 mt-5 container">
        <h2 class="font-weight-bold pt-5">Carrito de Compras</h2>
        <hr>
    </section>

    <div>
        <form action="../carrito/sp_insertar.php" method="GET">

            <section id="cart-container" class="container my-5">
                <table widh="100%">
                    <thead>
                        <tr>
                            <td> ID </td>
                            <td>Remove</td>
                            <td>Imagen</td>
                            <td>Producto</td>
                            <td>Precio</td>

                        </tr>
                    </thead>
                    <?php session_start(); ?>
                    <tbody>
                        <?php
                        $total = 0;
                        if(isset($_SESSION['carrito'])){
                        foreach ($_SESSION['carrito'] as &$carrito) { ?>
                            <tr>
                                <td><?php echo $carrito[0]; ?></td>
                                <td>

                                    <a id="<?php echo $carrito[0]; //id para eliminar
                                            ?>" onclick="EliminardelCarrito(this);"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                <?php if ($carrito[3] == null || $carrito[3 == ""]) { //si no tiene 
                                ?>
                                    <td><img src="../../img/sinimagen.jpg" alt=""></td>
                                <?php } else { //si tiene imagen
                                ?>
                                    <td><img src="data:image/jpg;base64,<?php echo base64_encode($carrito[3]); ?>" alt=""></td>
                                <?php } ?>
                                <td><?php echo $carrito[1]; //nombre 
                                    ?></td>
                                <td><?php echo '$' . $carrito[2]; //precio
                                    ?></td>

                            </tr>
                        <?php $total = $total + $carrito[2];
                        }
                    }
                        $_SESSION['total'] = $total;
                        ?>
                    </tbody>
                </table>
            </section>
            <section id="cart-bottom" class="container">
                <div class="row">
                    <div class="comentario col-lg-6 col-md-6 col-12 mb-4">
                        <div>
                            <h5>Comentarios</h5>
                            <input id="n1" type="text" placeholder="Agregue un comentario">
                            <button onclick="agregar_comentario()" type="button" class="comenta" id="envio">Enviar</button>
                            <hr class="third-hr">
                            <textarea id="n2" readonly="readonly" class="Comentarios" placeholder="Comentario..."></textarea>
                        </div>
                    </div>
                    <div class="total col-lg-6 col-md-6 col-12">
                        <div>
                            <h5>Total a pagar</h5>
                            <div class="d-flex justify-content-between">
                                <h6>Total:</h6>
                                <p><?php echo '$' . $_SESSION['total']; ?></p>
                            </div>
                            <hr class="second-hr">
                            <a href="../Pago.php"><button type="button" id="pagar" class="btn btn-primary">Pago c/tarjeta</button></a>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>

            </section>

        </form>
    </div>
    <script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'blue'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
            sandbox:    'AUkWObjta8obMWHkeu6jbZVLBGXqNUxWReE9pIZeXTlyugGNPLWoEU0S3AmcLcZK82AktEKyiN38QyvV',
            production: ''
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total:<?php echo $_SESSION['total']?>, currency: 'MXN' }, 
                            description:"Compra de productos a Develoteca:$0.01",
                            custom:"Codigo"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                alert("Pagado: $"+ <?php echo $_SESSION['total'] ?>+" \nGracias por su compra!");
                <?php unset($_SESSION['carrito']); $_SESSION['total']=0; ?>
                window.location="../../index.php";
            });
        }
    
    }, '#paypal-button-container');
 
</script>
    <script src="../../Script/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script>
        function EliminardelCarrito(e) {
            var Id = e.getAttribute("id");
            console.log(Id);
            $.ajax({
                type: 'POST', //aqui puede ser igual get
                url: '../carrito/sp_eliminar_carrito.php', //aqui va tu direccion donde esta tu funcion php
                data: {
                    opc: Id,
                    process: true
                }, //aqui tus datos
                success: function(data) {
                    alert(data);
                    location.reload();
                },
            });
        }
    </script>
</body>

</html>