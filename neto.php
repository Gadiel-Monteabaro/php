<?php

//definicion
function calcularNeto($bruto){
echo $neto = $bruto - ($bruto * 0.17) ;
return $neto;
}

//uso
calcularNeto (80000);
