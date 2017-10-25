<?php

function volCilindro($radio,$altura){
    $vol=Pi*$radio*$radio*$altura;
    return $vol;
}

$radio=4;
$altura=5;
define ("Pi",3.1415927);
$volumen=volCilindro($radio,$altura);
echo "El volumen de un cilindro con radio $radio y altura $altura es $volumen <br>";

?>