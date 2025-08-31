<?php
$array=range(1,50);
echo var_dump($array);

$array2=array();

for ($i=0;$i<count($array);$i++)
	$array[$i]=rand_num();


while(count($array2)<50){
	$i++;
	array_push($array2,rand_num());
}

function rand_num(){
	if(rand()%2==0) return rand()%9999;
	else $array = -rand()%99999;
}


echo var_dump($array)."<br>";
echo var_dump($array2);


?>
