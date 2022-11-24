
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categorías</title>
    <link rel="shortcut icon" href="../../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/PerfilUsuario.css">
    <link rel="stylesheet" href="../../css/PaginaPrincipal.css">
    <link rel="stylesheet" href="../../css/style.css">
 
</head>


<body>

    <nav>
        <a href="../../index.php">Inicio</a>
       <!-- agregar el inicio de sesion despues -->
        <a id="Salir-btn" name="SalirBtn" class="link" action="../Login.html">Cerrar Sesion</a>
        <?php session_start(); ?>
    </nav>

    <img class="Logo" src="../../img/NOMBRE.png" width="180" height="75" alt="Imagen">
  </header>

  <main>

  <div class="container datos"> 

    <h4 class="mb-3">CATEGORIAS</h4>

       <div class="container my-5">

            <h2>Lista de categorías</h2>
            <a class="btn btn-success" href="create.php" role="button">Agregar</a>
            <br>
            <table class="table">
              <thead>
                 <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                 </tr>
              </thead>
                <tbody>
                    <?php 
                                            
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>                       
                        <td>
                            <a class="btn btn-primary btn-sm" href="edit.php">Editar</a>
                            <a class="btn btn-danger btn-sm" href="delete.php">Eliminar</a>
                        </td>
                    </tr>
                </tbody>





            </table>
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
<script src="../js/categoria_nueva.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
</body>
</html>