<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion
function calcularNeto($bruto){
echo $neto = $bruto - ($bruto * 0.17) ;
return $neto;
}

//uso
calcularNeto (80000);
