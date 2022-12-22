<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Lista de tareas</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5"></script>
</head>

<body background="grey">
    <?php
    session_start();
    if (!isset($_SESSION['correo'])) {
        header("location:index.php");
    }
    include('db.php');
    ?>
    <div class="alert alert">

    </div>
    

    <div class="container">
        <header class="text-center text-light my-4">
            <h1 class="mb-4">Lista de tareas</h1>

            <?php echo $_SESSION['correo']; ?>
        </header>

        <div class="row justify-content-center">
            <?php
            $cod = $_SESSION['correo'];
            $rs = mysqli_query($connexion, "SELECT U.id_usuario, U.usuario, T.id_tareas, T.nomtarea
      FROM usuarios U INNER JOIN tareas T ON U.id_usuario = T.id_usuario WHERE correo = '$cod'");
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>N° Tarea</th>
                        <th>Tarea</th>
                        <th>Nombre del usuario</th>
                        <th colspan="2">Acción</th>
                    </tr>
                </thead>
                <?php while ($registro = mysqli_fetch_array($rs)) { ?>
                    <tr>
                        <td><?php echo $registro['id_tareas']; ?></td>
                        <td><?php echo $registro['nomtarea']; ?></td>
                        <td><?php echo $registro['usuario']; ?></td>
                        <?php $nombre = $registro['usuario']; ?>

                        <td>
                            <a href="editar.php?cod=<?php echo $registro['id_tareas']; ?>" class="btn btn-info">Editar</a>
                            <a href="delete.php?cod=<?php echo $registro['id_tareas']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </table>
        </div>



        <div class="row justify-content-center">
            

                <div class="form-group">
                <a href="crear.php" class="btn btn-info">Crear Tarea</a>

                </div>
           
    </div>

    <a href="index.php" class="btn btn-danger">Cerrar sesion</a>
    <br>
    <br>
    <div class="col-md-4 col-sm-4">

                   </div>
              </div>

         </div>
    </div>


</body>

</html>