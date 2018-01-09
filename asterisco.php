<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Haciendo figuras</title>
    <link rel="stylesheet" href="figuras.css">
  </head>
  <body>

    <h3>Figura 1</h3>
<?php
$i=1;

while ($i <=5) {
  echo "*";
  echo "<br>";
  $i++;
}
 ?>

 <h3>Figura 2</h3>
 <?php


$figura="*****";
  for ($i=1; $i <=5 ; $i++) {
    for ($h=$i; $h <=$i ; $h++) {
    }
    echo $figura;
    echo "<br>";
  }
  ?>

  <h3>Figura 3</h3>

  <?php

  for ($i=1; $i <=7 ; $i++) {
    for ($a=1; $a <=$i ; $a++) {
      echo "*";
    }
    echo "<br>";
  }
   ?>

   <h3>Figura 4</h3>
   <?php

$numero=5;
   for ($i=1; $i <=$numero ; $i++) {
     for ($a=1; $a <=$i ; $a++) {
       if (($i%2)==1) {
         echo "*";
       }
     }
     echo "<br>";
   }
   echo "<br>";
   $numero2=0;
   for ($b=3; $b >=$numero2 ; $b--) {
     for ($c=1; $c <=$b ; $c++) {
       if (($b%2)==1) {
         echo "*";
       }
     }
      echo "<br>";
   }
    ?>

    <h3>Figura 5</h3>
    <div class="piramide">
    <?php
    $numero=9;
       for ($i=1; $i <=$numero ; $i++) {
         for ($a=1; $a <=$i ; $a++) {
           if (($i%2)==1) {
             echo "*";
           }
         }
         echo "<br>";
       }
     ?>
   </div>
  </body>
</html>
