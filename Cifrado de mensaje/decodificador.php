<?php
$frase="Los catalanes hacen cosas.";

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
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Descifrar mensaje</title>
  </head>
  <body>
    <?php
    echo $fraseCodificada;
    ?>
  </body>
</html>
