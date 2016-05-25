<?php
require_once('lib/nusoap.php');
$cliente = new nusoap_client('http://localhost:8080/prueba/serviceDatos.php?wsdl','wsdl');
$resultado = $cliente->call('Calculadora', array('x' => '3', 'y' => 4, 'operacion' => 'multiplica'));
echo $cliente ->getError();
echo $resultado;