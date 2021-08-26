<?php 

$semana = array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');

$semana[7] = 'nuevo dato';

echo $semana[0] . '<br />';

echo $semana[7] . '<br />';

$arreglo = ['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];

$tiposDEdatosENarray = array('cadena de texto',1,array('abc',123),true);

echo 'array[2][0] ' . $tiposDEdatosENarray[2][0] . '<br />';
echo 'array[2][1] ' . $tiposDEdatosENarray[2][1] . '<br />';

?>