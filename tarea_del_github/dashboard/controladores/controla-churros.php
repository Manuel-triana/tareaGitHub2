<?php

$churros = $_POST ["cantidad"];

if ($churros <=0) {
    echo "Error: la cantidad de churros no es valida";
}
else {
    ($operacion = $churros * 1500);
    echo "el total a pagar es de  " .$operacion;
}


?>