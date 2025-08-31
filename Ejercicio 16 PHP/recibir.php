<?php
if(!isset($_POST["submit"])){ 
    echo "Manda el formulario";
} else {
    // $_POST -> ("nombre", "apellidos", "fechadenacimiento", "email", "archivo", "contrasena", "rol");
    if(isset($_POST["nombre"])) echo "Nombre: " . $_POST["nombre"] . "<br><br>";
    if(isset($_POST["apellidos"])) echo "Apellidos: " . $_POST["apellidos"] . "<br><br>";
    if(isset($_POST["fechadenacimiento"])) echo "Fecha de nacimiento: " . $_POST["fechadenacimiento"] . "<br><br>";
    if(isset($_POST["email"])) echo "Correo Electrónico: " . $_POST["email"] . "<br><br>";
    if(isset($_FILES["archivo"]["name"])) echo "Archivo subido: " . $_FILES["archivo"]["name"] . "<br><br>";
    if(isset($_POST["rol"])) echo "Rol: " . $_POST["rol"] . "<br><br>";
}
?>