<?php
require_once __DIR__ . '/../library/DesignPatterns/ASingleton.php';

require_once __DIR__ . '/../library/Utilities/TIterator.php';
require_once __DIR__ . '/../library/Utilities/TArrayAccess.php';
require_once __DIR__ . '/../library/Utilities/TCountable.php';

require_once __DIR__ . '/../library/Chessboard/Board.php';
require_once __DIR__ . '/../library/Chessboard/IChessman.php';
require_once __DIR__ . '/../library/Chessboard/AChessman.php';
require_once __DIR__ . '/../library/Chessboard/Chessmen.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Bishop.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/King.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Knight.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Pawn.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Queen.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Rook.php';

$chessboard = new \Chessboard\Board();
echo $chessboard;
$from = trim(readline("From: "));
$to = trim(readline("To: "));
while (strlen($from) > 0 && strlen($to) > 0) {
    list ($fromFile, $fromRank) = explode(",", $from);
    list ($toFile, $toRank) = explode(",", $to);
    $chessboard->move(array($fromFile, $fromRank), array($toFile, $toRank));
    echo $chessboard;
    $from = trim(readline("From: "));
    $to = trim(readline("To: "));
}
