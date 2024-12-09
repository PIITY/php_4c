<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string='niech będzie,co będzie;czas wszytstko równo w swym unosi pędzie.'
    ?>
Cytat: <q><?php echo($string) ?></q>
<br>
liczba znaków: <?php echo Strlen ($string) ?> 
</body>
</html>