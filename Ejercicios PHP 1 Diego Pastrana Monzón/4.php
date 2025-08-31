<?php
$i=0;
echo "Numero 1: ".$i. "<br>";
$j=1;
echo "Numero 2: ".$j;
$num=2;
while($num<=20){
	$num++;
	$value=$i+$j;
	$i=$j;
	$j=$value;
	echo "<br>Numero ".$num.": ".$value;
}
