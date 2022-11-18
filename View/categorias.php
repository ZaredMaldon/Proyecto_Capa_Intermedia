<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="shortcut icon" href="../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/PerfilUsuario.css">
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="../NUEVOS HTML/Compras.html">Compra</a>
            <a href="../NUEVOS HTML/Consulta_ventas.html">Ventas</a>
            <a href="../NUEVOS HTML/Consulta_pedidos.html">Pedidos</a>
            
       <!-- agregar el inicio de sesion despues -->
            <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
        </nav>

        <img class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">
    </header>
    <main>
        <div class="container datos">
               <div class="col-sm-15">
                 <h1> Categorias </h1>

                 <?php 
                 $accion = (isset($_GET['accion'])) ? $_GET['accion'] : "listar";
                 
                 switch($accion){
                        case "listar":               
                            ?>
                            <a href="/?page=categorias&accion=crear" class="btn btn-success"></a>
                            <?php
                        break;

                        case "crear":
                            if(isset($_GET['btn_crear'])){
                                var_dump($_GET);
                            }else{

                            }
                            ?>
                            <form action="" method="get">
                                <input type="text" name="Categoria" placeholder="Nombre de categoria:">
                                <input type="text" name="Descripcion" placeholder="Descripción:">
                                <input type="submit" name="btn_crear" value="CREAR" class="btn btn-success">
                                <input type="hidden" name="accion" placeholder="crear">
                                <input type="hidden" name="page" placeholder="categoria">                              
                            </form>
                            <?php
                        break;

                        case "editar":
                        break;

                        case "borrar":
                        break;

                }
                ?>             
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
    <script src="../js/Funciones.js"></script>
</body>

</html>