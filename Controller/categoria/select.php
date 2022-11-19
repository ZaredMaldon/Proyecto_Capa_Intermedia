<?php

require_once("../CategoriasDAO.php");

$categoriaDao=new CategoriaDao();

<<<<<<< Updated upstream
$Id=$_POST['id'];

echo json_encode($Id);
/* $categoriaDao->mostrar_id($Id); */
=======
$Id=$_POST['Categoria'];
?>
 <script>
    console.log('<?php echo $Id ;?>');
 </script>
<?php
//echo json_encode($Id);
//$categoriaDao->mostrar_id($Id);
>>>>>>> Stashed changes
?>