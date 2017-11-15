<?php
$gasto=352;
$importe=0;
$descuento=0;
$impuesto=0;

if ($gasto>100){
    $descuento=$gasto*0.20;
    $importe=$gasto-descuento;
}