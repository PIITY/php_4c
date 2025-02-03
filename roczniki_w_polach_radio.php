<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<fieldset style="border: 2px solid black;">
<legend>Roczniki</legend>
    <form>
<?php 

$rok= range(2010,2025);

foreach($rok as $c) {
?>

<label>
<input type="radio" name="rok" id="<?= $c ?>" value="<?= $c ?>"><?= $c ?></br>
</label>

<?php
}
?>

</fieldset>
</form>
</body>
</html>