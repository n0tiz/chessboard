<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Pawn extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "p";
        $this->icons[AChessman::COLOUR_BLACK] = "P";
    }

    public function getPossibleMoves()
    {
        $possibleMoves = array();
        // this is the default move of this pawn, one rank at a time
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        // if this is the first move of the pawn, the pawn can move two ranks forward
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 2 : -2);
        // check if the position exists
        if ($this->isFirstMove() && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        return $possibleMoves;
    }

    public function getPossibleAttackMoves()
    {
        $possibleAttackMoves = array();
        // file diagonally to the left
        $fKey = array_search($this->getFile(), $this->files) - 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleAttackMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        // file diagonally to the right
        $fKey = array_search($this->getFile(), $this->files) + 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleAttackMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        return $possibleAttackMoves;
    }

    public function move(array $to)
    {
        // keep a history of moves of this chessman
        array_push($this->previousLocations, $this->currentLocation);
        // change the current location of this chessman
        $this->currentLocation = $to;
        return true;
    }
}
