<?php
require_once(getcwd() . "/../library/Utilities/Autoloader.php");
$autoloader = new Utilities\Autoloader();
$autoloader->register();

session_start();

if (!isset($_SESSION['chessgame']) || is_null($_SESSION['chessgame'])) {
    $player1 = new Chessboard\Chessplayer('player', 'one', 'player-one');
    $player2 = new Chessboard\Chessplayer('player', 'two', 'player-two');

    $chessgame = new Chessboard\Chessgame();
    $chessgame->setWhitePlayer($player1);
    $chessgame->setBlackPlayer($player1);
    $chessgame->initialize();

    $_SESSION['chessgame'] = serialize($chessgame);
}

$chessgame = unserialize($_SESSION['chessgame']);

$c = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/chessboard.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <table>
            <tr><td></td><td><?= implode("</td><td>", $chessgame->getChessboard()->getFiles()) ?></td><td></td></tr>
            <?php foreach (array_reverse($chessgame->getChessboard()->getRanks()) as $i => $rank): ?>
                <tr>
                    <td><?= $rank ?></td>
                    <?php foreach ($chessgame->getChessboard()->getFiles() as $file): ?>
                        <?php $chessman = $chessgame->getChessboard()->findChessmanOnLocation(array($file, $rank)); ?>
                        <?php $c ++; ?>
                        <?php $class = "dark"; ?>
                        <?php if ($c % 2 !== $i % 2): ?>
                            <?php $class = "light"; ?>
                        <?php endif; ?> 
                        <?php if (is_null($chessman)): ?>
                            <td class="<?= $class ?>" data-rank="<?= $rank ?>" data-file="<?= $file ?>"></td>
                        <?php else: ?>
                            <td class="<?= $class ?> <?= strtolower($chessman->getColour()) ?> <?= strtolower($chessman->getChessmanName()) ?>" data-rank="<?= $rank ?>" data-file="<?= $file ?>"></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <td><?= $rank ?></td>
                </tr>
            <?php endforeach; ?>
            <tr><td></td><td><?= implode("</td><td>", $chessgame->getChessboard()->getFiles()) ?></td><td></td></tr>
        </table>
    </body>
</html>