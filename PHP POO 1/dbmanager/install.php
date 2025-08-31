<?php
// Set-up the database
// el . es para concatenar la variable
require_once "connect.php";
$sql = "CREATE TABLE IF NOT EXISTS userEntity (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    surname VARCHAR(20),
    birthday DATE,
    email VARCHAR(255),
    birthdate VARCHAR(255),
    family VARCHAR(255),
    address VARCHAR(20),
    bankaccount VARCHAR(255),
    password VARCHAR(255)
);";

$query = mysqli_query($conn, $sql);
if ($query) echo "Se creó la tabla correctamente";
else echo "No se creó la tabla";

/*
$users = [
    "user1" => ["root", "carlos", "2022-01-25", "rootcarlos31416@fail.local", "1234", "admin"],
    "user2" => ["asiel", "santana", "2002-10-20", "rootcarlos31416@fail.local", "1234", "admin"],
    "user3" => ["hadriel", "saveedra", "2012-11-29", "rootcarlos31416@fail.local", "1234", "admin"],
    "user4" => ["luis", "figo", "1999-10-10", "rootcarlos31416@fail.local", "1234", "admin"]
];

foreach ($users as $key => $value) {
    $sql = "INSERT INTO users (name, surname, birthday, email, password, role) VALUES ('" . $value[0] . "'";
    for ($i = 1; $i < count($value); $i++) {
        $sql .= ", '" . $value[$i] . "'";
    }
    $sql .= ");";
    echo "<br><br><br>" . $sql . "<br>";
    $query = mysqli_query($conn, $sql);
    echo ($query);
}

*/
?>