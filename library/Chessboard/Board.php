<?php

namespace Chessboard;

use Chessboard\AChessman;
use Chessboard\Chessman\Rook;
use Chessboard\Chessman\Knight;
use Chessboard\Chessman\Bishop;
use Chessboard\Chessman\Queen;
use Chessboard\Chessman\King;
use Chessboard\Chessman\Pawn;
use Chessboard\Chessmen;
use \Exception;

/**
 * @author patrick
 */
class Board
{

    public $files = array("a", "b", "c", "d", "e", "f", "g", "h");
    public $ranks = array("1", "2", "3", "4", "5", "6", "7", "8");

    public function __construct()
    {
        $chessmen = Chessmen::getInstance();
        $chessmen[] = new Rook(AChessman::COLOUR_BLACK, array("a", "8"));
        $chessmen[] = new Knight(AChessman::COLOUR_BLACK, array("b", "8"));
        $chessmen[] = new Bishop(AChessman::COLOUR_BLACK, array("c", "8"));
        $chessmen[] = new Queen(AChessman::COLOUR_BLACK, array("d", "8"));
        $chessmen[] = new King(AChessman::COLOUR_BLACK, array("e", "8"));
        $chessmen[] = new Bishop(AChessman::COLOUR_BLACK, array("f", "8"));
        $chessmen[] = new Knight(AChessman::COLOUR_BLACK, array("g", "8"));
        $chessmen[] = new Rook(AChessman::COLOUR_BLACK, array("h", "8"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("a", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("b", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("c", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("d", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("e", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("f", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("g", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_BLACK, array("h", "7"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("a", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("b", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("c", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("d", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("e", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("f", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("g", "2"));
        $chessmen[] = new Pawn(AChessman::COLOUR_WHITE, array("h", "2"));
        $chessmen[] = new Rook(AChessman::COLOUR_WHITE, array("a", "1"));
        $chessmen[] = new Knight(AChessman::COLOUR_WHITE, array("b", "1"));
        $chessmen[] = new Bishop(AChessman::COLOUR_WHITE, array("c", "1"));
        $chessmen[] = new Queen(AChessman::COLOUR_WHITE, array("d", "1"));
        $chessmen[] = new King(AChessman::COLOUR_WHITE, array("e", "1"));
        $chessmen[] = new Bishop(AChessman::COLOUR_WHITE, array("f", "1"));
        $chessmen[] = new Knight(AChessman::COLOUR_WHITE, array("g", "1"));
        $chessmen[] = new Rook(AChessman::COLOUR_WHITE, array("h", "1"));
    }

    public function move(array $from, array $to)
    {
        try {
            $chessmen = Chessmen::getInstance();
            return $chessmen->move($from, $to);
        } catch (Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    public function __toString()
    {
        $chessmen = Chessmen::getInstance();
        $return = implode("|", $this->files) . PHP_EOL;
        foreach (array_reverse($this->ranks) as $rank) {
            $row = array();
            foreach ($this->files as $file) {
                list(, $chessman) = $chessmen->find(array($file, $rank));
                if (is_null($chessman)) {
                    $row[] = " ";
                } else {
                    $row[] = $chessman->getIcon();
                }
            }
            $return .= implode("|", $row) . PHP_EOL;
        }
        $return .= implode("|", $this->files) . PHP_EOL;
        return $return;
    }
}
