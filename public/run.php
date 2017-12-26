<?php

require_once(getcwd() . '/../library/Utilities/Autoloader.php');
$autoloader = new Utilities\Autoloader();
$autoloader->register();

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
var_dump(serialize($chessboard));

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
/* $possibleMoves = $chessboard->getPossibleMovesForChessmanOnLocation(array("h", "2"));
  try {
  $chessboard->moveChessmanFromLocationToLocation(array("h", "2"), array("h", "4"));
  } catch (\Exception $e) {
  var_dump($e->getMessage());
  } */
//$chessboard->moveChessmanFromLocationToLocation(array("a", "6"), array("a", "4"));
//echo (string) $chessboard;
$chessman = $chessboard->findChessmanOnLocation(array("e", "7"));
//var_dump($chessboard->getPossibleAttackMovesForChessman($chessman));
//var_dump($chessboard->getPossibleAttackPathsForChessman($chessman));
//var_dump($chessboard->getPossibleMovesForChessman($chessman));
//var_dump($chessboard->getPossiblePathsForChessman($chessman));
