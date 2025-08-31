<?php

$config = ["address" => "localhost:3307", "user" => "root", "db" => "phptest", "passwd" => ""];

echo var_dump($config);

$conn = new mysqli($config["address"], $config["user"], $config["passwd"], $config["db"]);



?>