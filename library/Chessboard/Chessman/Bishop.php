<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Bishop extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "b";
        $this->icons[AChessman::COLOUR_BLACK] = "B";
    }

    public function getPossibleMoves()
    {
        // move diagonally
        $possibleMoves = array();
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) + $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            $rKey = array_search($this->getRank(), $this->ranks) + $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) + $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            $rKey = array_search($this->getRank(), $this->ranks) + $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) - $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            $rKey = array_search($this->getRank(), $this->ranks) - $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) - $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            $rKey = array_search($this->getRank(), $this->ranks) - $x;
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        return $possibleMoves;
    }

    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }
}
