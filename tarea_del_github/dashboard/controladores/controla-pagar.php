<?php

$valor = $_POST["valor"];
$edad = $_POST["edad"];

if ($edad >=60 and $valor >0  ){
    ($descuento = $valor * 0.20);
    ($total = $valor - $descuento);
    echo "usted tiene un descuento del 20% el valor a pagar es de : " .$total;
}
elseif ($edad <0 or $valor <0 ){
    echo "uno de los valores no es valido o ambos no son validos";
}
else{
    ($edad <60 and $valor >0);
    echo "pagar : " .$valor; 
}


?>