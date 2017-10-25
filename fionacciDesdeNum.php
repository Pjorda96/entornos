<?php
function fibonacci($num){
    if ($num==0) return $num;
    else {
        $n3=$n1;
        $n1=$n2;
        $n2=$n1+$n3;
        echo $n2." ";
        $num=$num-1
        fibonacci($num);
    }
}
function fib($n1,$n2){
    $n3=$n1;
    $n1=$n2;
    $n2=$n1+$n3;
    echo $n2." ";
    $num=$num-1
    fibonacci($num);
}

$numero=10;
$num=$numero-2;
echo "0 ";
echo "1 ";
fibonacci($num);
?>