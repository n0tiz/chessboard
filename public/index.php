<?php
require_once(getcwd() . "/../library/Utilities/Autoloader.php");
$autoloader = new Utilities\Autoloader();
$autoloader->register();

session_start();

$_SESSION['chessgame'] = null;

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
        <script src="js/chessboard.js"></script>
    </head>
    <body>
        <div class="chessboard">
            <div class="spacer"></div><div class="file"><?= implode('</div><div class="file">', $chessgame->getChessboard()->getFiles()) ?></div><div class="spacer"></div>
            <div class="clear"></div>
            <?php foreach (array_reverse($chessgame->getChessboard()->getRanks()) as $rank): ?>
                <div class="rank"><?= $rank ?></div>
                <?php foreach ($chessgame->getChessboard()->getFiles() as $file): ?>
                    <?php $chessman = $chessgame->getChessboard()->findChessmanOnLocation(array($file, $rank)); ?>
                    <div class="chessman"><?php if (!is_null($chessman)): ?><?= $chessman->getHtml() ?><?php endif; ?></div>
                <?php endforeach; ?>
                <div class="rank"><?= $rank ?></div>
                <div class="clear"></div>
            <?php endforeach; ?>
            <div class="spacer"></div><div class="file"><?= implode('</div><div class="file">', $chessgame->getChessboard()->getFiles()) ?></div><div class="spacer"></div>
        </div>
    </body>
</html>