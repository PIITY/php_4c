<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$haslo1 = "mbank.pl";
$haslo2 = "rnbank.pl";
?>
<style>
 table {
border-collapse: collapse;
width: auto;
        }
  td,th {
padding: 5px;
border: 1px solid black;
text-align: center;
        }
    </style>
<table>
     <tr>
     <th><?php echo $haslo1; ?></th></b>
          <th><?php echo $haslo2; ?></th></b>
     </tr>
        <tr>
     <td colspan="2">


     
       <?php
       if ($haslo1 === $haslo2) {



          echo "Hasła są takie same";

        } else {
           echo "Hasła są różne";
            }
     ?>

     </td>
  </tr>
    </table>







</body>
</html>