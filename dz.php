<?php
$a = 12;
$b = 8;
$c = $a + $b;
$d = $a*$b;
echo $c, $d;
?>

<?php
$a = 9;
$b = 8;
$c = $a*$a + $b*$b;
echo $c;
?>

<?php
$a = 5;
$b = 7;
$c = 9;
$d = $a+$b+$c/3;
echo $d;
?>

<?php
$x = 4;
$y = 12;
$z = 21;
$a = ($x+1) - 2 * ($z - 2*$x + $y);
echo $a;

?>
<?php
$a = 50;
$a /=3;
echo "</br>".$a;
$a /=5;
echo "</br>".$a;

$a = 50;
$a = $a / 100 * 30 + $a;
echo "</br>".$a;
$a = 50;
$a = $a / 100 * 120 + $a;
echo "</br>".$a;
?>

<?php
$a = 284;
$b = 160;
$a = $a / 100 * 40;
$b = $b / 100 * 84;
echo "</br>".$a,"</br>".$b;

$a = "358";
$a = $a[0] + $a[1] + $a[2];
echo "</br>".$a;
?>

<?php
$a = "375";
$b = 0;
echo "</br>".$a[0],$b,$a[1];

$a = '456';
echo "</br>".$a[2],$a[1],$a[0];
?>

<?php

$num = 1;

if($num % 2 === 0)
  echo 'Четное';
else
  echo 'Нечетное';
  ?>