<?php
include_once "funciones/funciones.php";


    function resultadoValidarEmail($email){
        if(gettype($email)!="array") 
            foreach ($email as $value) {
                resultadoValidarEmail($value);
            }
        
        if(validadEmail($email1)==false) 
            echo "No es un correo electrónico<br>";
        else 
            echo "Es un correo electrónico<br>";
    }
?>