<?php
require_once(getcwd() . "/../library/Utilities/Autoloader.php");
$autoloader = new Utilities\Autoloader();
$autoloader->register();

session_start();

if (!isset($_SESSION['game'])) {
    $chessmanList = new \Chessboard\ChessmanList();
    $chessmanList[] = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("a", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Knight(Chessboard\AChessman::COLOUR_BLACK, array("b", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_BLACK, array("c", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_BLACK, array("d", "8"));
    $chessmanList[] = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_BLACK, array("e", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_BLACK, array("f", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_BLACK, array("g", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_BLACK, array("h", "8"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("a", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("b", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("c", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("d", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("e", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("f", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("g", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_BLACK, array("h", "7"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("a", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("b", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("c", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("d", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("e", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("f", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("g", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Pawn(\Chessboard\AChessman::COLOUR_WHITE, array("h", "2"));
    $chessmanList[] = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("a", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Knight(Chessboard\AChessman::COLOUR_WHITE, array("b", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("c", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Queen(\Chessboard\AChessman::COLOUR_WHITE, array("d", "1"));
    $chessmanList[] = new \Chessboard\Chessman\King(\Chessboard\AChessman::COLOUR_WHITE, array("e", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Bishop(\Chessboard\AChessman::COLOUR_WHITE, array("f", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Knight(\Chessboard\AChessman::COLOUR_WHITE, array("g", "1"));
    $chessmanList[] = new \Chessboard\Chessman\Rook(\Chessboard\AChessman::COLOUR_WHITE, array("h", "1"));
    $chessboard = new \Chessboard\Chessboard();
    $chessboard->setChessmanList($chessmanList);
    $_SESSION['game'] = serialize($chessboard);
}

$chessboard = unserialize($_SESSION['game']);

$c = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/chessboard.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <table>
            <tr><td></td><td><?= implode("</td><td>", $chessboard->getFiles()) ?></td><td></td></tr>
            <?php foreach (array_reverse($chessboard->getRanks()) as $i => $rank): ?>
                <tr>
                    <td><?= $rank ?></td>
                    <?php foreach ($chessboard->getFiles() as $file): ?>
                        <?php $chessman = $chessboard->findChessmanOnLocation(array($file, $rank)); ?>
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
            <tr><td></td><td><?= implode("</td><td>", $chessboard->getFiles()) ?></td><td></td></tr>
        </table>
    </body>
</html>