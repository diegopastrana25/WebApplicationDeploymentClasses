<?php
include_once("includes/funciones/funciones.php");

if(!isset($_POST["submit"])){ 
    echo "Manda el formulario";
} else {
    // Validación de NOMBRE
    if(isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        if(strlen($nombre) <= 20 && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
            echo "Nombre: OK <br>";
        } else {
            echo "El nombre no debe contener números ni ser mayor a 20 caracteres <br>";
        }
    }

    // Validación de APELLIDOS
    if(isset($_POST["apellidos"])) {
        $apellidos = $_POST["apellidos"];
        if(strlen($apellidos) <= 20 && !is_numeric($apellidos) && preg_match("/^[a-zA-Z]+$/", $apellidos)) {
            echo "Apellidos: OK <br>";
        } else {
            echo "El apellido no debe contener números ni ser mayor a 20 caracteres <br>";
        }
    }

    // Validación de FECHA DE NACIMIENTO
    if(isset($_POST["fechadenacimiento"])) {
        $fechadenacimiento = $_POST["fechadenacimiento"];
        if(preg_match("/^\d{4}-\d{2}-\d{2}$/", $fechadenacimiento)) {
            echo "Fecha de nacimiento: OK <br>";
        } else {
            echo "La fecha de nacimiento debe estar en el formato YYYY-MM-DD <br>";
        }
    }

    // Validación de EMAIL
    if(isset($_POST["email"])) {
        $email = $_POST["email"];
        $test= validadEmail($email);
        if($test) {
            echo "Email: OK <br>";
        } else {
            echo "El email no es válido <br>";
        }
    }

    // Validación de CONTRASEÑA
    if(isset($_POST["contrasena"])) {
        $contrasena = $_POST["contrasena"];
        if(strlen($contrasena) > 6) {
            echo "Contraseña: OK <br>";
        } else {
            echo "La contraseña debe tener una longitud mayor que 6 caracteres <br>";
        }
    }

    // Validación de ARCHIVO
    if(isset($_FILES["archivo"])) {
        if($_FILES["archivo"]["error"] == 0) {
            echo "Archivo subido: " . $_FILES["archivo"]["name"] . "<br>";
        } else {
            echo "Error al subir el archivo <br>";
        }
    }

    // Validación de ROL
    if(isset($_POST["rol"])) {
        echo "Rol: " . $_POST["rol"] . "<br>";
    }
}
?>