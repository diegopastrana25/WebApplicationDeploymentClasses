<?php
ini_set('display_errors', 1);

include "User.php";
$user1 = new User("Diego","Pastrana");
$user2 = new User("Azael","Santana");
$user1 -> addFamilyMember(array($user1, $user2, $user2));
$user1->showMe();
include "dbmanager/install.php";
var_dump($conn);
include "dbmanager/action.php";


saveuser($user2);

?>