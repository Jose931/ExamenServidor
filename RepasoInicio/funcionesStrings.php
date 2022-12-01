<?php

$cad="defjvb/n";
$cad1= "   fp.informatica.iessanjuandelacruz@educa.madrid.org   ";
$cad2= "educa.madrid.org";
$cad3="defghijk/n";
$cad4="defghi";
$cad5= "path=[“\usr\$usuario”]|\usr";
$cad6= "C/  Claveles  23,20D,28033,Madrid";
$cad7= " juan  rodríguez Hernández";
$long= 15;
$car1=".";
$car2="*";

echo addslashes($cad5) . "<br>";
echo quotemeta($cad3) . "<br>";
echo trim($cad1). "<br>";
echo chop($cad3). "<br>";
echo chr(45). "<br>";
echo strlen($cad6). "<br>";
echo strchr($cad1,$car1). "<br>";   
echo str_pad($cad4,$long,$car1,STR_PAD_RIGHT). "<br>";
echo str_pad($cad3,-2,$car2,STR_PAD_BOTH). "<br>";
echo strrchr($cad6,','). "<br>";
echo ucwords($cad7). "<br>";
echo substr($cad1,-9). "<br>";
echo strstr($cad6, 'claveles'). "<br>";
echo stristr($cad6, 'claveles'). "<br>";
echo str_repeat($cad4,6). "<br>";
echo count_chars($cad2,3). "<br>";
echo strpos($cad1,'.i', 2). "<br>";
echo strrpos($cad1,'i'). "<br>";
echo strstr($cad1,'@'). "<br>";
echo strncmp($cad3,$cad,4). "<br>";


?>