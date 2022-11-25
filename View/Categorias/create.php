<?php session_start();?>
<?php 
require_once("../../Model/Conexion.php");
    //conexión
    $conexion=new Conectar();
    $con=$conexion->conectar(); 

//Variables
 $categoria    ="";
 $descripcion  ="";
 $idUsuario    ="";
 $errorMessage ="";
 $successMessage="";
 //SI los datos de han transmitido por el método post 
 //tons inicializamos las variables con los datos del form

 if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    $categoria   = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];
    $idUsuario   = $_SESSION['userNow'][0];
    do{
        if ( empty($categoria) || empty($descripcion) ){
            $errorMessage = "Todos los campos son requeridos";
            break;
        }
            //agregamos nueva categoria a database
            $consulta = "INSERT INTO categorias(Categoria,Descripcion,FK_Usuario,Estatus) VALUES ('$categoria','$descripcion','$idUsuario', 1)";
            $resultado= $con ->query($consulta);

            if(!$resultado){
                $errorMessage= "query invalido: ". $con->error;
                break;
            }

            $categoria    ="";
            $descripcion  ="";

            $successMessage = "Categoria agregada correctamente";

            header("location: Categoria_add.php");
            exit;

    }while(false);
 }
?>
<?php require_once("../../Model/Conexion.php");?>
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
     
        <a id="Salir-btn" name="SalirBtn" class="link" action="../Login.html">Cerrar Sesion</a>
    </nav>

    <img class="Logo" src="../../img/NOMBRE.png" width="180" height="75" alt="Imagen">
  </header>

  <main>

  <div class="container datos"> 

    <h4 class="mb-3"><b>CATEGORIAS</b></h4>

    <div class=container my-5>
           <h5 class="mb-3">Agregar categoría</h5>
           <!-- MSG DE FALLO, LLENAR DATOS -->
            <?php 
            if( !empty($errorMessage)){
                echo "
                 <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                  <strong>$errorMessage</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='close'></button>
                 </div>
                ";
            }

            ?>

        <form method="post">
           <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Categoría</b></label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control" placeholder="Nombre de categoría" name="categoria" value="<?php echo $categoria; ?>">
              </div>
           </div>
           <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><b>Descripción</b></label>
              <div class="col-sm-6"> 
                <input type="text" class="form-control" placeholder="Descripción" name="descripcion" value="<?php echo $descripcion; ?>">
              </div>
           </div>

           <?php 
            if( !empty ($successMessage)){
                echo "
                 <div class='row mb-3'>
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' arial-label='close'></button>
                    </div>
                  
                 </div>
                ";
            }
           ?>

           <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-success">Agregar</button>
                </div>

                <div class="col-sm-3 d-grid">
                <button class="btn btn-danger" href="Categoria_add.php" role="button">Cancelar</button>
                </div>
           </div>
          

        </form>

    </div>
        
  </div>
    
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>
</html>