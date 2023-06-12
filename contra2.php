<?php 

include("contra3.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['Correo']) >= 1 &&  strlen($_POST['Contraseña']) >= 1  &&  strlen($_POST['Nombre']) >= 1){

    $Correo = trim($_POST['Correo']);
      $Contraseña = trim($_POST['Contraseña']);
      $Nombre = trim($_POST['Nombre']);
$consulta = "INSERT INTO cuentas (Correo, Contraseña, Nombre ) VALUES ('$Correo','$Contraseña','$Nombre' )";
   $resultado = mysqli_query($conex, $consulta);
   if ($resultado) {
    ?> 
    <h3 class="ok">Te has registrado</h3>
    <?php
   }
   else {
    ?> 
    <h3 class="bad">Error!</h3>
    <?php
   }
    }

    else {
      ?> 
    <h3 class="bad">complete los campos</h3>
    <?php
    }
}

?>