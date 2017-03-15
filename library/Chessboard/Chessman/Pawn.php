<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

/**
 * @author patrick
 */
class Pawn extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "p";
        $this->icons[AChessman::COLOUR_BLACK] = "P";
    }

    public function getPossiblePaths()
    {
        $possiblePaths[] = $this->getPossibleMoves();
        foreach ($this->getPossibleAttackMoves() as $attackPath) {
            $possiblePaths[] = array($attackPath);
        }
        return $possiblePaths;
    }

    public function getPossibleMoves()
    {
        $possibleMoves = array();
        // this is the default move of this pawn, one rank at a time
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($rKey, $this->ranks)) {
            $possibleMoves[] = array($this->getFile(), (string) $this->ranks[$rKey]);
        }
        // if this is the first move of the pawn, the pawn can move two ranks forward
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 2 : -2);
        // check if the position exists
        if ($this->isFirstMove() && array_key_exists($rKey, $this->ranks)) {
            $possibleMoves[] = array($this->getFile(), (string) $this->ranks[$rKey]);
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
            $possibleAttackMoves[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        // file diagonally to the right
        $fKey = array_search($this->getFile(), $this->files) + 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            $possibleAttackMoves[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        return $possibleAttackMoves;
    }
}
