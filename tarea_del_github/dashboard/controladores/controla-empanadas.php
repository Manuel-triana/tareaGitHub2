<?php 

$empanadas = $_POST ["cantidad"];

if($empanadas <=0) {
echo "Error : la cantidad es invalida"; 
}

else{
    $operacion = $empanadas * 2000;
    echo "la cantidad a pagra es de " .$operacion;
}



?>