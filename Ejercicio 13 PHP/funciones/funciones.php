<?php
function validarEmail($email){
    $res = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($res == false) 
        return false;
    else 
        return true;
}
?>