<?php
$numeritos=array(40,24,3.141596,6,33,4.99);
print_r($numeritos);
echo "<br>Apartado 1: <br>";
foreach($numeritos as $dato){
    echo " ".$dato;
}
echo "<br>Apartado 2: <br>";
rsort($numeritos);
foreach($numeritos as $num) {
    echo " ".$num;
}
sort($numeritos); 
echo "<br>Apartado 3: <br>";
echo " ".count($numeritos);
echo "<br>Apartado 4: <br>";
$pos=array_search(33, $numeritos);
if($pos>=0) echo $numeritos[$pos];
else echo "no esta";
$pos=array_search(10, $numeritos);
echo "<br>". $pos;
if($pos>=0) echo" ". $numeritos[$pos];
else echo "no esta";
?>