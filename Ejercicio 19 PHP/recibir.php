<?php
var_dump($_POST);
if(!isset($_POST["submit"])){ 
    echo "Manda el formulario";
//$POST -> ("nombre, "apellidos", "fechadenacimiento", "email", "archivo", "contrasena", "rol");
if(!isset($_POST["nombre"])) echo $_POST["nombre"];
if(!isset($_POST["apellido"])) echo $_POST["apellido"];
if(!isset($_POST["fechadenacimiento"])) echo $_POST["fechadenacimiento"];
if(!isset($_POST["email"])) echo $_POST["email"];
if(!isset($_POST["archivo"])) echo $_POST["archivo"];
if(!isset($_POST["rol"])) echo $_POST["rol"];
}