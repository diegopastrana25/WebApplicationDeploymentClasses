<?php
include_once "funciones/funciones.php";

function resultadoValidarEmail($emails){
    if(gettype($emails) == "array") {
        foreach ($emails as $email) {
            resultadoValidarEmail($email);
        }
    } else {
        if(validarEmail($emails) == false) 
            echo "No es un correo electrónico<br>";
        else 
            echo "Es un correo electrónico<br>";
    }
}
?>