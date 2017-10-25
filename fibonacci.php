<?php
function fibonacci($n1,$n2){
    if ($n1>100) return $n1;
    else {
        $n3=$n1;
        $n1=$n2;
        $n2=$n3+$n1;
        echo $n2." ";
        fibonacci($n1,$n2);
    }
}

echo "0 ";
echo "1 ";
fibonacci(0,1);
?>