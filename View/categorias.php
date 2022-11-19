<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Categorias</title>
    <link rel="shortcut icon" href="../img/logo1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/PaginaPrincipal.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/PerfilUsuario.css">
    <link rel="stylesheet" href="../css/PaginaPrincipal.css">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>

   <?php 
    $_Categoria = $_GET['textInput'];
    $_Descripcion = $_GET['textarea'];
    ?>
  
  <header>
    <nav>
        <a href="categorias_nuevas.php">Regresar</a>
       <!-- agregar el inicio de sesion despues -->
        <a id="Salir-btn" name="SalirBtn" class="link" onclick="salir();">Cerrar Sesion</a>
        <?php session_start(); ?>
    </nav>

    <img class="Logo" src="../img/NOMBRE.png" width="180" height="75" alt="Imagen">
  </header>

  <main>

  <div class="container datos"> 

    <h4 class="mb-3">EDITAR CATEGORIA</h4>
        <form action=" ../Controller/categoria/categoria_modificar.php" method="post">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando</h5>
                </div>
                <div class="modal-body">
                    <p>Nombre categoria</p>
                    <input type="text" class="form-control" name="Categoria" id="textInput" value="<?php=$_Categoria?>">
                    <div id="msg"></div>
                    <br>
                    <p>Descripción</p>
                    <textarea name="Descripcion" class="form-control" id="textarea" cols="30" rows="5" value="<?php=$_Descripcion?>" ></textarea>
                </div> 
                <div class="modal-footer">
                    <a href="categorias_nuevas.php"><button type="button" class="btn btn-outline-danger btn-block"  style='width: 100px; height: 40px'> Cancelar </button></a>
                    <button type="submit" id="add" class="btn btn-outline-success">Agregar</button>
                </div>
                </div>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
</body>
</html>