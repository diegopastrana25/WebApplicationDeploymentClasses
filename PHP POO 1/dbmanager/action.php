<?php


function adduser($values){
    echo "hola";
    require "connect.php";

    $sql = "INSERT INTO userEntity (name, surname, birthdate, family, address, email, bankaccount, password) VALUES (
    '".$values[0]."',
    '".$values[1]."',
    '".$values[2]."',
    '".$values[3]."',
    '".$values[4]."',
    '".$values[5]."',
    '".$values[6]."',
    '".$values[7]."'
       
    );";
    //echo $sql;
    //var_dump($conn);
    mysqli_query($conn, $sql);

}

function saveuser($user){
    include_once "./User.php";
    $values = array(
        $user->getName(),
        $user->getSurname(),
        $user->getBirthdate(),
        $user->familyToString(),
        $user->getAddress(),
        $user->getEmail(),
        $user->getBankaccount(),
        $user->getPassword()
    );
    adduser($values);
}
?>