<?php
ini_set('display_errors', 1);
var_dump($_POST);

if (!isset($_POST["submit"])) { 
    echo "Acceso invalido";
    header("refresh:2;url=index.php");
    exit();
} else {
    $name = $surname = $password = $birthday = $file = $email = $address = $bankaccount = "";

    if (isset($_POST["nombre"])) {
        if (strlen($_POST["nombre"]) <= 20 && preg_match("/^[a-zA-Z]+$/", $_POST["nombre"])) {
            $name = $_POST["nombre"];
        } else {
            echo "El nombre no debe contener números y debe ser de máximo 20 caracteres<br>";
        }
    }

    if (isset($_POST["apellidos"])) {
        if (strlen($_POST["apellidos"]) <= 20 && preg_match("/^[a-zA-Z]+$/", $_POST["apellidos"])) {
            $surname = $_POST["apellidos"];
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

    if (isset($_POST["fechadenacimiento"])) {
        $birthday = $_POST["fechadenacimiento"]; //echo "fecha de nacimiento: ok<br>";
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"]; //echo "email: OK<br>";
        } else {
            echo "Email invalido<br>";
        }
    }

    if (isset($_POST["direccion"])) {
        $address = $_POST["direccion"]; //echo "direccion: OK<br>";
    }

    if (isset($_POST["cuentabancaria"])) {
        $bankaccount = $_POST["cuentabancaria"]; //echo "cuenta bancaria: OK<br>";
    }
    var_dump($name, $surname, $email, $address, $bankaccount, $password, $birthday);
    include "User.php";
    $user1 = new User($name, $surname, $email, $address, $bankaccount, $password, $birthday);
    $user1->showMe();
}
?>
