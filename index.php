<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>TodoList</title>
    <script src="https://kit.fontawesome.com/a5bc61b517.js" crossorigin="anonymous"></script>
    
</head>
<style>
</style>

<body  >
<form action="validar.php" method="post">
  <h1>Tareas disponibles</h1>

  <div class="login-continer" >
      <img src="720.jpg" alt="" >
      <p>Iniciar tareas</p>
      <label for="">CORREO ELECTRONICO</label>
      <div class="fields">
         <div class="data">
         <i class="fas fa-at"></i>
         <input type="text" name="correo" placeholder="Correo electronico" required>
         </div>  
         <label for="">CONTRASEÑA</label>
         <div class="data">
         <i class="fas fa-lock"></i>
         <input type="password" name="contraseña" placeholder="Contraseña" required>
         </div>
      </div>
      <button type type="submit" class="btn-login">LOGIN</button> <a class="button" href="registrarvista.php">REGISTRATE</a>
  </div>
</form>
    
</body>

</html>