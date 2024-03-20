<?php
$nombre = "Carlos";
echo $nombre . "<br>";
var_dump($nombre);
define('PULGADA', 0.25);

$cm = 25;
echo "<br>".$cm . " centímetros son: ". $cm*PULGADA . " pulgadas.";
$x = true;
$y=true;
echo "<br><br>";

if(!($x and $y)){
 echo "Verdadero";
}else echo "Falso";


?>