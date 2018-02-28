<?php
$frase="s.sacon cehas nelatacas Lo";

$fraseTemp="";
$fraseCodificada="";

$i=0;

while ($i<strlen($frase)){
    if($i==strlen($frase)-1){
      $fraseTemp=$fraseTemp . substr($frase,i,1);
    } else {
      $fraseTemp=$fraseTemp . substr($frase,$i+1,1) . substr($frase,$i,1);
    }
    $i=$i+2;
}
$i=strlen($fraseTemp)-1;
while($i>-1){
  $fraseCodificada=$fraseCodificada . substr($fraseTemp,$i,1);
  $i=$i-1;
}
echo $fraseCodificada;
?>
