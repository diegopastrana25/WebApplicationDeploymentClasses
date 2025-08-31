<?php


function adduser($values){
    echo "hola";
    require_once "connect.php";

    $sql = "INSERT INTO users (name, surname, birthday, email, password, role, image) VALUES (
    '".$values[0]."',
    '".$values[1]."',
    '".$values[2]."',
    '".$values[3]."',
    '".$values[4]."',
    '".$values[5]."',
    '".$values[6]."'
       
    );";
    mysqli_query($conn, $sql);

}

?>