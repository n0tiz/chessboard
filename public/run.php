<?php

$files = array(
    '/../library/DesignPatterns/ASingleton.php',
    '/../library/Utilities/TIterator.php',
    '/../library/Utilities/TArrayAccess.php',
    '/../library/Utilities/TCountable.php',
    '/../library/Chessboard/IChessman.php',
    '/../library/Chessboard/ChessmanList.php',
    '/../library/Chessboard/Chessboard.php',
    '/../library/Chessboard/AChessman.php',
    '/../library/Chessboard/Chessman/Bishop.php',
    '/../library/Chessboard/Chessman/King.php',
    '/../library/Chessboard/Chessman/Knight.php',
    '/../library/Chessboard/Chessman/Pawn.php',
    '/../library/Chessboard/Chessman/Queen.php',
    '/../library/Chessboard/Chessman/Rook.php',
);

foreach ($files as $file) {
    if ("WIN" === strtoupper(substr(PHP_OS, 0, 3))) {
        $file = str_replace('/', '\\', $file);
    }
    require_once(__DIR__ . $file);
}

// columns are called files (a - h, a on the left side, h on the right side)
// rows are called ranks (8 - 1, 8 is where black starts, 1 is where white starts)

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

//$chessboard->findChessmanOnLocation(array("a", "2"));
//count($chessboard->getChessmanList());
//$chessboard->removeChessmanFromLocation(array("a", "2"));
//count($chessboard->getChessmanList());
//$chessman = $chessboard->findChessmanOnLocation(array("b", "2"));
//$chessboard->removeChessman($chessman);
//count($chessboard->getChessmanList());
//$chessboard->getPossiblePathsForChessmanOnLocation(array("a", "1"));
//$chessman = $chessboard->findChessmanOnLocation(array("a", "1"));
//$chessboard->getPossiblePathsForChessman($chessman);
//$chessboard->getPossiblePathsForChessmanOnLocation(array("a", "7"));
//$chessboard->getPossibleMovesForChessman($chessman);
$possibleMoves = $chessboard->getPossibleMovesForChessmanOnLocation(array("h", "2"));
try {
    $chessboard->moveChessmanFromLocationToLocation(array("h", "2"), array("h", "4"));
} catch (\Exception $e) {
    var_dump($e->getMessage());
}
//$chessboard->moveChessmanFromLocationToLocation(array("a", "6"), array("a", "4"));
echo (string) $chessboard;
