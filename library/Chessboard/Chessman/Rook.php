<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Rook extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 5;
        $this->icons[AChessman::COLOUR_WHITE] = "r";
        $this->icons[AChessman::COLOUR_BLACK] = "R";
    }

    public function getPossibleMoves()
    {
        // move horizontal, vertical
        $possibleMoves = array();
        // horizontal, rank stays the same
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], $this->getRank()));
        }
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], $this->getRank()));
        }
        // vertical, file stays the same
        for ($x = 1; array_key_exists(array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? $x : -$x), $this->ranks); $x ++) {
            $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? $x : -$x);
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        for ($x = 1; array_key_exists(array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? -$x : $x), $this->ranks); $x ++) {
            $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? -$x : $x);
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        return $possibleMoves;
    }

    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }
}
