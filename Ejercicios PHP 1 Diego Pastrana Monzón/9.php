<?php
$svradd= $_SERVER["SERVER_ADDR"];
$rmtadd= $_SERVER["REMOTE_ADDR"];
$svport= $_SERVER["SERVER_PORT"];
$rmtport= $_SERVER["REMOTE_PORT"];
$nav= $_SERVER["HTTP_USER_AGENT"];
echo "el servidor está alojado en: ".$svradd.
"en el puerto:". $svport. "<br>";
echo "el cliente está operando desde: ".$rmtadd.
"en el puerto:". $rmtport. "<br>";
echo "Estas usando el agente de: ". $nav. "<br>";
if(strpos($nav, "Firefox") !== false)
	echo "Estas usando Firefox";
else
	echo "No estas usando Firefox";
?>
