<?php

require ('lib/nusoap.php');

$valx = $_POST['valx'];
$valy = $_POST['valy'];
$operacion = $_POST['operacion'];
$cliente = new nusoap_client('http://localhost:8080/prueba/serviceDatos.php?wsdl','wsdl');
$param = array('x' => $valx , 'y' => $valy , 'operacion' => $operacion);
$resultado = $cliente->call('Calculadora' ,$param);
echo $resultado;