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

    public function calculateAllowedMoves(array $chessmen)
    {
        $allowedMoves = array();
        // this is the default move of this pawn, one rank at a time
        array_push($allowedMoves, array($this->getFile(), (string) ($this->isWhite() ? $this->getRank() + 1 : $this->getRank() - 1)));
        // if this is the first move of the pawn, the pawn can move two ranks forward
        if ($this->isFirstMove()) {
            array_push($allowedMoves, array($this->getFile(), (string) ($this->isWhite() ? $this->getRank() + 2 : $this->getRank() - 2)));
        }
        // pawns can attack diagonally, each time one step
        // for example, a2 to b3 for white
        $attackMoves = array();
        // left file exists
        if (key_exists(array_search($this->getFile(), $this->files) - 1, $this->files)) {
            $leftFile = $this->files[array_search($this->getFile(), $this->files) - 1];
            $nextRank = (string) ($this->isWhite() ? $this->getRank() + 1 : $this->getRank() - 1);
            array_push($attackMoves, array($leftFile, $nextRank));
        }
        // right file exists
        if (key_exists(array_search($this->getFile(), $this->files) + 1, $this->files)) {
            $rightFile = $this->files[array_search($this->getFile(), $this->files) + 1];
            $nextRank = (string) ($this->isWhite() ? $this->getRank() + 1 : $this->getRank() - 1);
            array_push($attackMoves, array($rightFile, $nextRank));
        }
        // check if there is another colour pawn on one of the attack moves
        foreach ($chessmen as $chessman) {
            if (in_array($chessman->getCurrentLocation(), $attackMoves) && $chessman->getColour() == $this->getEnemyColour()) {
                array_push($allowedMoves, $attackMoves[array_search($chessman->getCurrentLocation(), $attackMoves)]);
            }
        }
        // @todo: check for collision with other pawns
        return $allowedMoves;
    }

    public function move(array $chessmen, array $to)
    {
        $allowedMoves = $this->calculateAllowedMoves($chessmen);
        // if the move is allowed
        if (in_array($to, $allowedMoves)) {
            // add the current location of this pawn to the history of locations
            array_push($this->previousLocations, $this->currentLocation);
            // make the actual move to the new location
            $this->currentLocation = $to;
            return true;
        }
        return false;
    }
}
