<?php
$colegio="particular";
$nivel="A";
$importe=0;

if ($colegio=="nacional"){
    if($nivel =="A") $importe=300;
    else if ($nivel =="B") $importe=200;
    else $importe=100;
} else {
    if($nivel =="A") $importe=400;
    else if ($nivel =="B") $importe=300;
    else $importe=200;
}
    
echo $importe;
?>