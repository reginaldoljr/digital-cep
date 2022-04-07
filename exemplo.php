<?php

require_once "vendor/autoload.php";

use Reginaldo\DigitalCep\Search;

$busca = new Search;

$resultado = $busca -> getAddressFromZipcode('15775001');

print_r($resultado);