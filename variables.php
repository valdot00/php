<?php

//string cadena de texto
$nombre = "Jorge";

//integer numeros enteros
$numero = 8;

//double numeros con decimales
$numero_decimal=7.7;

//boolean verdadero o falso (true / false)
$verdadero = false;

echo $nombre,$numero;

//echo $numero;

echo "hola, $nombre";#comillas dobles. NOTA: te podria causar problemas de seguridad
                                    // es mejor comillas sencillas 
echo 'hola, ' . $nombre;#comillas sencillas

echo gettype($nombre);#tipo de dato gettype();

echo gettype($numero);

?>