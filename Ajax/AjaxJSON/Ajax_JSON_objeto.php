<?php
//Para evitar que los warning salgan en la pantalla y salgan como JSON
error_reporting(0);

$objeto = (object) [
    'nombre' => 'Jose',
    'nacimiento' => 1993,
    'pais' => 'Costa Rica'
];
//Codificamos el objeto a JSON
$miJSON = json_encode($objeto);
echo $miJSON;
