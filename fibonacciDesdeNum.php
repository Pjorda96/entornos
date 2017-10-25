<?php
function fibonacci($num){
    $n1=0;
    $n2=1;
    fib($n1,$n2,$num);
}
function fib($n1,$n2,$num){
    if ($num==0) return $n1;
    else {
        $n3=$n1;
        $n1=$n2;
        $n2=$n1+$n3;
        echo $n2." ";
        $num=$num-1;
        return fib($n1,$n2,$num);
    }
}

$numero=10;
$num=$numero-2;
echo "0 ";
echo "1 ";
fibonacci($num);
?>