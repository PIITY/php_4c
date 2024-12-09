<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data_rozpoczecia = mktime(0, 0, 0, 9, 1, date("Y")); 
$dzien_tygodnia = date('l', $data_rozpoczecia);
$dzien_roku = date('z', $data_rozpoczecia) + 1; 
echo "<p style='background-color: lightsteelblue; border: 2px dotted blueviolet; border-radius: 5px; font-style: italic; padding: 15px;'>
        Rozpoczęcie tego roku szkolnego odbyło się w $dzien_tygodnia i był to dzień roku $dzien_roku.
      </p>";
?>
</body>
</html>

