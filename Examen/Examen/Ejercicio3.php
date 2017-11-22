<?php
$precio=75;
$estrellas=5;

if ($estrellas==3) $precio=$precio*1.10;
else if ($estrellas==4) $precio=$precio*1.15;
else $precio=$precio*1.20;
echo $precio;
?>