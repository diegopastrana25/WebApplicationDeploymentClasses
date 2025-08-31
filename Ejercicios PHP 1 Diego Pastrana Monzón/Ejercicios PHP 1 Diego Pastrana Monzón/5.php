<?php
//Tabla de un número n pasado por $:GET[]
$n=$_GET["n"];
if(!isset($_GET["n"])||
	!is_numeric($_GET["n"])) echo "Falta un numero";

else{
	for($i=1;$i<=10;$i++){
		$value=$_GET["n"]*$i;
		echo $value."<br>";
		}
}
?>

