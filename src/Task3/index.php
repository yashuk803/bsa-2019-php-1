<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\Task1\FightArena;
use App\Task3\FightArenaHtmlPresenter;
use App\Task1\Fighter;

$arena = new FightArena();
$arena->add(new Fighter(
    1,
    'Ryu',
    100,
    10,
    'https://bit.ly/2E5Pouh'
));
$arena->add(new Fighter(
    2,
    'Chun-Li',
    70,
    30,
    'https://bit.ly/2Vie3lf'
));
$arena->add(new Fighter(
    3,
    'Ken Masters',
    80,
    20,
    'https://bit.ly/2VZ2tQd'
));
$presenter = new FightArenaHtmlPresenter();
$presentation = $presenter->present($arena);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
    <?php echo $presentation; ?>
</body>
</html>
