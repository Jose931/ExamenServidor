<?php
$timestamp = time();
$fecha = date("d-m-Y H:i:s", $timestamp);
echo $fecha . "<br>";
$datos = getdate();

foreach($datos as $clave => $valor){
    echo $clave . " : " . $valor . " // ";
}
echo  "<br>";
echo "Ahora: " . date("d-m-Y H:i:s", strtotime("now")). "<br>";
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";

echo "<br>";
// construimos la marca de tiempo del 15-04-04 23:15
 $timestamp = mktime(23, 15, 0, 4, 15, 2004);
 // mostramos la marca de tiempo convirtiéndola de nuevo
 echo date ("M-d-Y H:i:s", $timestamp) . "<br>";
?>