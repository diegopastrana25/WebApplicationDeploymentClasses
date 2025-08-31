<?php
$border=1;
?>

<table <?=" border=".$border?> >
<?php
$tabla= [array("Frutas","Deportes", "Idiomas"),
         array("Manzana", "Fútbol", "Español"),
         array("Naranja", "Tenis", "Inglés"),
         array("Sandía", "Baloncesto", "Francés"),
         array("Fresa", "Bésibol", "Italiano")
];

$tabla2= [
        "Frutas" => array("Manzana", "Naranja", "Sandía", "Fresa"),
        "Deportes" => array("Fútbol", "Tenis", "Baloncesto", "Béisbol"),
        "Idiomas" => array("Español", "Inglés", "Francés", "Italiano")
];

//var_dump($tabla);
//echo "</pre>";
//foreach($tabla as $linea) echo var_dump($linea). "<br>";
//foreach($tabla2 as $linea) echo var_dump($linea). "<br>";

for($i=0;$i<count($tabla);$i++){
        if($i==0) writehead($tabla[0]);
        else writerow($tabla[$i]);
}

function writehead(array $array){
        echo "<tr>";
        $size=count($array);
        $i=0;
        while($i<$size){
                echo "<td>";
                echo $array[$i];
                echo "</td>";
                $i++;
        }
        echo "</tr>";
}

function writerow(array $array){
        echo "<tr>";
        $size=count($array);
        $i=0;
        while($i<$size){
                echo "<td>";
                echo $array[$i];
                echo "</td>";
                $i++;
        }
        echo "</tr>";
}
?>
</table>
<table border=2>
<?php
echo "<tr>";
foreach ($tabla2 as $key =>$value){
        echo "<th>";
        echo $key;
        echo "</th>";
}
echo "</tr>";
for ($i=0;$i<count($tabla2["Frutas"]);$i++){
        echo "<tr>";
        foreach($tabla2 as $value){
                echo "<td>";
                echo $value[$i];
                echo "</td>";
        }
        echo "</tr>";
}
?>
</table>