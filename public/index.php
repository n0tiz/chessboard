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

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/chessboard.css" rel="stylesheet" type="text/css" />
        <script>
        </script>
    </head>
    <body>
        <table>
            <tr><th></th><th><?= implode("</th><th>", $chessgame->getChessboard()->getFiles()) ?></th><th></th></tr>
            <?php foreach (array_reverse($chessgame->getChessboard()->getRanks()) as $i => $rank): ?>
                <tr>
                    <th><?= $rank ?></th>
                    <?php foreach ($chessgame->getChessboard()->getFiles() as $file): ?>
                        <?php $chessman = $chessgame->getChessboard()->findChessmanOnLocation(array($file, $rank)); ?>
                        <?php if (is_null($chessman)): ?>
                            <td data-rank="<?= $rank ?>" data-file="<?= $file ?>"></td>
                        <?php else: ?>
                            <td class="<?= strtolower($chessman->getColour()) ?> <?= strtolower($chessman->getChessmanName()) ?>" data-rank="<?= $rank ?>" data-file="<?= $file ?>"></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <th><?= $rank ?></th>
                </tr>
            <?php endforeach; ?>
            <tr><th></th><th><?= implode("</th><th>", $chessgame->getChessboard()->getFiles()) ?></th><th></th></tr>
        </table>
    </body>
</html>