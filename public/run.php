<?php
require_once __DIR__ . '/../library/DesignPatterns/ASingleton.php';

require_once __DIR__ . '/../library/Utilities/TIterator.php';
require_once __DIR__ . '/../library/Utilities/TArrayAccess.php';
require_once __DIR__ . '/../library/Utilities/TCountable.php';

require_once __DIR__ . '/../library/Chessboard/Board.php';
require_once __DIR__ . '/../library/Chessboard/IChessman.php';
require_once __DIR__ . '/../library/Chessboard/AChessman.php';
require_once __DIR__ . '/../library/Chessboard/Chessmen.php';
require_once __DIR__ . '/../library/Chessboard/Chessboard.php';
require_once __DIR__ . '/../library/Chessboard/ChessmanList.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Bishop.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/King.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Knight.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Pawn.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Queen.php';
require_once __DIR__ . '/../library/Chessboard/Chessman/Rook.php';

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

$chessboard->findChessmanOnLocation(array("a", "2"));
count($chessboard->getChessmanList());
$chessboard->removeChessmanFromLocation(array("a", "2"));
count($chessboard->getChessmanList());
$chessman = $chessboard->findChessmanOnLocation(array("b", "2"));
$chessboard->removeChessman($chessman);
count($chessboard->getChessmanList());
var_dump($chessboard->getPossiblePathsForChessmanOnLocation(array("a", "1")));
$chessman = $chessboard->findChessmanOnLocation(array("a", "1"));
var_dump($chessboard->getPossiblePathsForChessman($chessman));
var_dump($chessboard->getPossiblePathsForChessmanOnLocation(array("a", "7")));
