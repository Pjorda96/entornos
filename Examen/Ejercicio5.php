<?php
$cantidad=75;
$conversion=2;

if ($conversion==1) echo $cantidad."$=".$cantidad*0.85."€";
else echo $cantidad."€=".$cantidad*1.18."$";
?>