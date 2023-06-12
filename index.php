<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="php.css">
    <title>Correos</title>
</head>
<body>
<div class="containerPrincipal">
        <div class="form-group">
<form method="post">
    <h1>Cuenta</h1>
  <input type="email" name="Correo" placeholder="Ingresa Tu correo">
  <input type="password" name="Contraseña" placeholder="Ingresa una contraseña">
  <input type="text" name="Nombre" placeholder="Ingresa Tu Nombre">
  <input type="submit" name="register">

</form>
</div>
</div>

    <?php
    include("contra2.php");
    
    ?>
    
</body>
</html>
