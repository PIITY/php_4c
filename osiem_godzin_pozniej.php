

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>osiem_godzin_pozniej</title>
    <style>
        h3 {
            color: tomato;
        }
        p:first-of-type {
            color: tomato;
        }
        h3:last-of-type {
            color: navy;
        }
        p:last-of-type {
            color: navy;
        }
    </style>
</head>
<body>
<?php
$current_time = date("H:i:s");
$time_eight_hours_later = date("H:i:s", strtotime("+8 hours"));
?>
    <h3>Aktualna godzina</h3>
    <p><?php echo $current_time; ?></p>
    
    <h3>Osiem godzin później</h3>
    <p><?php echo $time_eight_hours_later; ?></p>
</body>
</html>


</body>
</html>