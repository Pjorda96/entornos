<?php
$dado1=5;
$dado2=6;
$dado3=6;
$contador=0;
$rtdo="";

if ($dado1==6) $contador++;
if ($dado2==6) $contador++;
if ($dado3==6) $contador++;

if ($contador==3) $rtdo="Oro";
else if ($contador==2) $rtdo="Plata";
else if ($contador==1) $rtdo="Bronce";
else $rtdo="Perdedor";

echo $rtdo;
?>