<?php
include_once "funciones/funciones.php";

function validadEmail($email){
    $res=filter_var($email, FILTER_VALIDATE_EMAIL);
    if($res== false) return false;
        else return true;
}

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