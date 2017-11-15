<?php
$nota=100;
$rtdo="";

if ($nota==100) $rtdo="sistemas";
else if ($nota>=90) $rtdo="electronica";
else if ($nota>=80) $rtdo="industrial";
else if ($nota>=70) $rtdo="administracion";
echo $rtdo;
?>