<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php 
$x=5;
$y=15;
$a=4;
$b=35;
$r=16;
$alfa= 93;
?>

<fieldset>
<legend>AD1.</legend>
<p>Wynik dodawania 5 i 15 wynosi <?= $x+$y ?></p>
<p>Wynik odejmowania 5 i 15 wynosi <?= $x-$y ?></p>
<p>Wynik mnożenia 5 i 15 wynosi <?= $x*$y ?></p>
<p>Wynik dzielenia 5 i 15 wynosi <?= $x/$y ?></p>
<p>Reszta z dzielenia 5 i 15 wynosi <?= $x%$y ?></p>
</fieldset>

<fieldset>
<legend>AD2.</legend>
<p>Obwód prostokąta o bokach długości 4 i 35 jest równy <?= $a+$b+$a+$b ?></p>
<p>Pole prostokąta o bokach długości 4 i 35 jest równe <?= $a*$b ?> j<sup>2</sup></p>



</fieldset>
<fieldset>
<legend>AD3.</legend>
<p>Obwód koła o promieniu 16 jest równy <?= 2*pi()*$r ?></p>
<p>Pole koła o promieniu 16 jest równe <?= round(pi()*$r**2,3) ?>j<sup>2</sup></p>
<p>Pole wycinka koła o promieniu 16 i kącie środkowym 93° jest równe <?= round(pi()*$alfa*$r**2/360,3) ?>j<sup>2</sup></p>


</fieldset>

</body>
</html>