<?php

require_once '../library/Chessboard/Chessboard/Chessboard.php';
require_once '../library/Chessboard/AChessman.php';
require_once '../library/Chessboard/IChessman.php';
require_once '../library/Chessboard/TIterator.php';
require_once '../library/Chessboard/TArrayAccess.php';
require_once '../library/Chessboard/TCountable.php';
require_once '../library/Chessboard/Chessmen.php';
require_once '../library/Chessboard/Chessman/Bishop.php';
require_once '../library/Chessboard/Chessman/King.php';
require_once '../library/Chessboard/Chessman/Knight.php';
require_once '../library/Chessboard/Chessman/Pawn.php';
require_once '../library/Chessboard/Chessman/Queen.php';
require_once '../library/Chessboard/Chessman/Rook.php';

$chessboard = new \Chessboard\Chessboard\Chessboard();
var_dump($chessboard->move(array("a", "2"), array("a", "4")));
var_dump($chessboard->move(array("a", "7"), array("a", "6")));
echo $chessboard;
