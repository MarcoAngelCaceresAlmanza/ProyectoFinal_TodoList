<!DOCTYPE html>
<html lang="es">
<header>
	<meta charset="UTF-8">
	<title></title> 
    
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	
    <link rel="stylesheet" href="estiloss.css">

    <!-- // esto esta para activar //

    <script type="text/javascript">
        function enableSending() {
            document.loginform.submit.disabled = !document.loginform.terms.checked;
        };
    </script>
    -->
</header>  


<body>
<p><img src="./utea-Logo.png"> </img></p>
 <form action="register.php" class="formulario" method="POST">
     <h1>Registrate</h1>
  
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="usuario" placeholder="Nombre Completo">
         
         </div>
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correo" placeholder="Correo Electronico">
         
         </div>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" placeholder="Contraseña">
         </div>

         <div class="terms">
         <p> <input type="checkbox" name="terms" onclick="enableSending()">
         <label for="terms"><a href="./condicionesprivacidad.html">Al Registrarte, aceptas nuestras condiciones de uso y politica de privacidad.</a></label> </p>
         </div>
         <input type="submit" name="submit" value="Registrate" class="button">
         <p>¿Ya tienes una cuenta?<a class="link" href="index.php.">Iniciar Sesion</a></p>
     </div>
    </form>
</body>
</html>