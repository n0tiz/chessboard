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