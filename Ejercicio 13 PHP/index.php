<?php
include "includes/header.php";
include_once "includes/funciones/funciones.php";

echo "<h1>TEST DE FORMULARIOS</h1>";
$emails = array("1233.test@noescorreo.dumb", "Hola soy Diego");
resultadoValidarEmail($emails);

$mail1 = "1233.test@noescorreo.dumb";
echo $mail1 . "<br>";
echo validarEmail($mail1);
$mail2 = "Hola soy Diego";
echo $mail2 . "<br>";
echo validarEmail($mail2);
if (validarEmail($mail2) == false) 
    echo "No es un correo electrónico";
else 
    echo "Es un correo electrónico";
/*
<form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="email1" name="email1">
  <div>------------------------------------</div>
  <label for="email">Email</label><br>
  <input type="text" id="email" name="email">
</form>
*/
require_once "includes/footer.php";
?>