<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5"></script>
  <link rel="stylesheet" href="style.css">

  <title>Lista de tareas</title>
</head>

<body>
  <?php
  include('db.php');
  ?>

<div class="container">
        <header class="text-center text-light my-4">
            <h1 class="mb-4">Lista de tareas</h1>
        </header>
</div>

  <div class="card-body">

    <?php
   
    $cod = mysqli_real_escape_string($connexion, (strip_tags($_GET["cod"], ENT_QUOTES)));

    //seleccion del registro exacto para la edicion
    $rs = mysqli_query($connexion, "SELECT * FROM tareas WHERE id_tareas = '$cod'");

    $tareas = mysqli_fetch_array($rs);

    if (isset($_POST['btnGuardar'])) {
      $tarea = $_POST['tarea'];

      //actualizacion del registro
      $rsU = mysqli_query($connexion, "UPDATE tareas SET nomtarea = '$tarea' WHERE id_tareas = '$cod'");

      if ($rsU) {
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
      } else {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
      }
    }
    ?>

        <header class="text-center text-light my-4">
            <h4 class="mb-4">Descripción de las tareas</h4>
        </header>
    <form class="form-horizontal" action="" method="post">

    

        <div class="row justify-content-center">
        <input type="text" id="inputName" class="form-control" name="tarea" value="<?php echo $tareas[1]; ?>">
      </div>
      <br>
      <br>
      <br>
      <div class="row justify-content-center">
        <a href="todo.php" class="btn btn-info">Atras</a> 
        <input type="submit" value="Guardar" class="btn btn-danger" name="btnGuardar">
      </div>
  </div>
  </form>
</body>

</html>