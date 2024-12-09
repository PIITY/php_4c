<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    
<?php
$integer=83;
 $float='234,34'; 
 $boolean=true;
 $string='23sa'
?>
<?php echo "echo dla wartości boolowskiej:$boolean" ?>
<br>
<?php echo "echo dla liczb rzeczywistych:$float" ?>
<br>
<?php echo "echo dla ciągu znaków:$string" ?>
<br>
<?php echo "echo dla liczb całkowitych:$integer" ?>
<hr>
<p>var_dump dla ciągu znaków: <?php var_dump($string) ?> </p>

<p>var_dump dla wartości boolowskiej:<?php var_dump($boolean) ?> </p>

<p>var_dump dla liczb rzeczywistych: <?php var_dump($float) ?> </p>

<p>var_dump dla liczb całkowitych: <?php var_dump($integer) ?> </p>

<hr>

<p></p>


</body>
</html>
