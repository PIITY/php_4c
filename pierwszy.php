<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwsza strona z PHP-em</title>
</head>
<body>
    <?php $title="Pierwsza strona z PHP-em" ?>
    <?php $link1="https://openai.com/chatgpt/" ?>
    <?php $link2="https://www.youtube.com/?app=desktop&gl=PL&hl=pl" ?>
    <?php $link3="https://www.volkswagen.p>" ?>

    <h1> <?=$title ?> </h1>

    <ol style="list-style-type: decimal-leading-zero">
<li> <a href="<?=$link1?>">OpenAI</a> </li>
<li> <a href="<?=$link2?>">Youtube</a> </li>
<li> <a href="<?=$link3?>">Volkswagen</a> </li>




    </ol>
</body>
</html>