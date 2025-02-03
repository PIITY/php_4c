<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        label{
margin-right: 15px;



        }
    </style>
<fieldset style="border: 2px solid blue;">
<legend>Alfabet</legend>
    <form>
<?php
$letter= range('a','z');

foreach($letter as $l) {
    ?>

    <label>
    <input type="checkbox" name="literka[]" id="<?= $l ?>" value="<?= $l ?>"><?= $l ?>
    </label>
    <?php
    }
    ?>
    <br>
<input  type="submit" name="wybierz" id="Wybierz" value="Wybierz" >
<pre>
<?php print_r($_GET);
if($_SERVER["REQUEST_METHOD"] === 'POST')
{

}



?>
</pre>



    </fieldset>
    </form>
</body>
</html>