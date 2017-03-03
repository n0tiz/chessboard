<?php

namespace Chessboard\Chessboard;

use Chessboard\AChessman;
use Chessboard\Chessman\Rook;
use Chessboard\Chessman\Knight;
use Chessboard\Chessman\Bishop;
use Chessboard\Chessman\Queen;
use Chessboard\Chessman\King;
use Chessboard\Chessman\Pawn;

/**
 * @author patrick
 */
class Chessboard
{

    protected $board = array();
    public $files = array("a", "b", "c", "d", "e", "f", "g", "h");
    public $ranks = array("1", "2", "3", "4", "5", "6", "7", "8");
    public $chessmen = array();

    public function __construct()
    {
        $this->chessmen = array(
            new Rook(AChessman::COLOUR_BLACK, array("a", "8")),
            new Knight(AChessman::COLOUR_BLACK, array("b", "8")),
            new Bishop(AChessman::COLOUR_BLACK, array("c", "8")),
            new Queen(AChessman::COLOUR_BLACK, array("d", "8")),
            new King(AChessman::COLOUR_BLACK, array("e", "8")),
            new Bishop(AChessman::COLOUR_BLACK, array("f", "8")),
            new Knight(AChessman::COLOUR_BLACK, array("g", "8")),
            new Rook(AChessman::COLOUR_BLACK, array("h", "8")),
            new Pawn(AChessman::COLOUR_BLACK, array("a", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("b", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("c", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("d", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("e", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("f", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("g", "7")),
            new Pawn(AChessman::COLOUR_BLACK, array("h", "7")),
            new Pawn(AChessman::COLOUR_WHITE, array("a", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("b", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("c", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("d", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("e", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("f", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("g", "2")),
            new Pawn(AChessman::COLOUR_WHITE, array("h", "2")),
            new Rook(AChessman::COLOUR_WHITE, array("a", "1")),
            new Knight(AChessman::COLOUR_WHITE, array("b", "1")),
            new Bishop(AChessman::COLOUR_WHITE, array("c", "1")),
            new Queen(AChessman::COLOUR_WHITE, array("d", "1")),
            new King(AChessman::COLOUR_WHITE, array("e", "1")),
            new Bishop(AChessman::COLOUR_WHITE, array("f", "1")),
            new Knight(AChessman::COLOUR_WHITE, array("g", "1")),
            new Rook(AChessman::COLOUR_WHITE, array("h", "1")),
        );
    }

    public function move(array $from, array $to)
    {
        foreach ($this->chessmen as $chessman) {
            if ($chessman->getCurrentLocation() == $from) {
                return $chessman->move($this->chessmen, $to);
            }
        }
        return false;
    }

    public function __toString()
    {
        $board = array();
        foreach ($this->chessmen as $chessman) {
            $board[$chessman->getFile()][$chessman->getRank()] = $chessman->getIcon();
        }
        return print_r($board, true);
    }
}
