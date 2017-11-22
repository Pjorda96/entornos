<?php
$aux=0;

for($i=1; $i<=4; $i++){
    $aux=pow(1+(1/$i), $i);
    echo "Aproximación por ".$i." = ".$aux. "<br>";
}
?>