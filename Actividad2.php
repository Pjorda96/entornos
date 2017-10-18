<?php
//Act1
//triangulo
$base=5;
$altura=8;
$area=($base*$altura)/2;
echo $area . "<br>";

//Act2
//definir Pi
define("Pi",3.1415927);
echo Pi . "<br>";
//area circulo
$radio=10;
$area=Pi*($radio*$radio);
echo $area . "<br>";

//Act3
//par o impar
$num=269;
if ($num%2==0) echo "Par" . "<br>";
else if ($num%2!=0) echo "Impar" . "<br>";

//Act4
//comparar 3  nums
$num1=1;
$num2=2;
$num3=3;
if ($num1>$num2 && $num1>$num3) echo ("num1 es el mayor y es " . $num1) . "<br>";
else if ($num2>$num1 && $num2>$num3) echo ("num2 es el mayor y es " . $num2) . "<br>";
else if ($num3>$num2 && $num3>$num1) echo ("num3 es el mayor y es " . $num3) . "<br>";

//Act5
//contador
for ($cont=1;$cont<=10;$cont++) echo $cont . "<br>";

//Act6
//calcular potencia
$numIntrod=37;
$pot=3;
$n=$numIntrod;
for ($cont=2;$cont<=$pot;$cont++) $n=$n*$numIntrod;
echo $n . "<br>";

//Act7
//factorial
$fac=9;
$n2=1;
for ($cont=2;$cont<=$fac;$cont++) $n2=$n2*$cont;
echo $n2 . "<br>";
?>