<?php
//Set-up the data base

$sql = "CREATE TABLE IF NOT EXISTS users (
user_id INT AUTO_INCREMENT PRIMARY KEY,
name varchar (20),
surname varchar (20),
birthday date,
email varchar (255),
password varchar (255),
role varchar (20),
image varchar (255)
);";

mysqli_query($conn, $sql);
if ($query) echo "Se creo la tabla correctamente";
else echo "No se creo la tabla";{

}