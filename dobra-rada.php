<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php define("DOBRA_RADA","Bez chleba, to się nie najesz.") ?>

<h3>Stała ma wartość: <?=(DOBRA_RADA) ?> </h3>
<br>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strlen:</b><?php echo Strlen (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>str_word_count:</b><?php echo str_word_count (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strrev:</b><?php echo strrev (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strpos:</b><?php echo strpos (DOBRA_RADA,'t') ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>str_replace:</b><?php echo str_replace ('chleba','mięsa',DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strtolower:</b><?php echo strtolower (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strtoupper:</b><?php echo strtoupper (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>ucwords:</b><?php echo ucwords (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>trim:</b><?php echo trim (DOBRA_RADA) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>strstr:</b><?php echo strstr (DOBRA_RADA,'nie') ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>substr:</b><?php echo substr (DOBRA_RADA,10,4) ?> </p>
<p>Do stałej DOBRA_RADA stosuje funkcje <b>str_pad:</b><?php echo str_pad (DOBRA_RADA,37,'-_-', STR_PAD_BOTH) ?> </p>
<B> <?=date('N',STRTOTIME) </B>
</body>
</html>