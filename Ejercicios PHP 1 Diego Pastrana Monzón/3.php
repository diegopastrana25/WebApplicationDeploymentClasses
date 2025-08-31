<?php
echo "1"." impar";
for($i=2;$i<=20;$i++){
	$value=$i*$i;
	echo "<br>" .$value;
	if ($value%2==1)
		echo " impar";
	else
		echo " par";
}
?>
