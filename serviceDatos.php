<?php

require_once('lib/nusoap.php');
require_once('calculadora.func.php');

$server = new nusoap_server();
$server->configureWSDL('Servidor', 'urn:Servidor');
$server->register('Calculadora', array('x' => 'xsd:string', 'y' => 'xsd:string', 'operacion' => 'xsd:string'),'urn:Calculadorawsdl', 'urn:Calculadorawsdl#Calculadora', 'rpc', 'encoded', 'Operaciones con numeros');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
