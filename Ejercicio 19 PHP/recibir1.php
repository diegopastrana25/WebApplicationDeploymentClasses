<?php
var_dump($_POST);
if (!isset($_POST["submit"])) { 
    echo "Acceso invalido";
    header("refresh:2;url=index.php");
} else {

    if (isset($_POST["nombre"])) {
        if (strlen($_POST["nombre"]) <= 20
            && !is_numeric($_POST["nombre"])
            && !preg_match("/[0-9]/", $_POST["nombre"])) {
            $name = $_POST["nombre"]; //echo "Nombre: OK<br>";
        } else {
            echo "El nombre no debe contener números y debe ser de máximo 20 caracteres<br>";
        }
    }

    if (isset($_POST["apellidos"])) {
        if (strlen($_POST["apellidos"]) <= 20
            && !is_numeric($_POST["apellidos"])
            && !preg_match("/[0-9]/", $_POST["apellidos"])) {
            $surname = $_POST["apellidos"]; //echo "apellidos: OK<br>";
        } else {
            echo "El apellido no debe contener números y debe ser de máximo 20 caracteres<br>";
        }
    }

    if (isset($_POST["contraseña"])) {
        if (strlen($_POST["contraseña"]) <= 6) {
            echo "Metele mas a la contraseña<br>";
        } else {
            $password = $_POST["contraseña"]; //echo "contraseña: OK<br>";
        }
    }

    if (isset($_POST["rol"])) {
        $rol = $_POST["rol"]; //echo "rol: " . $_POST["rol"] . " <br>";
    } else {
        $rol = $_POST["rol"]; //echo "rol: NONE <br>";
    }

    if (isset($_POST["fechadenacimiento"])) {
        $birthday = $_POST["fechadenacimiento"]; //echo "fecha de nacimiento: ok<br>";
    }
    if (isset($_POST["archivo"])) {
        $file = $_POST["archivo"]; //echo $_POST["archivo"] . "<br>";
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"]; //echo "email: OK<br>";
        } else {
            echo "Email invalido<br>";
        }
    }
    $user= array ($name, $surname, $birthday, $email, $password, $rol);
    include "include/dbmanager/action.php";
    adduser($user);
}

?>