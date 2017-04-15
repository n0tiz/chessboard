<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;

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

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        $possiblePaths = array();
        if (count($this->getPossibleMoves()) > 0) {
            $possibleMoves = array_reverse($this->getPossibleMoves());
            $possibleMoves[] = $this->getCurrentLocation();
            $possiblePaths[] = array_reverse($possibleMoves);
        }
        foreach ($this->getPossibleAttackMoves() as $possibleAttackMove) {
            $possiblePaths[] = array($this->getCurrentLocation(), $possibleAttackMove);
        }
        return $possiblePaths;
    }

    /**
     * Retrieve the possible moves.
     * @return array
     */
    public function getPossibleMoves()
    {
        $possibleMoves = array();
        // The default of a Pawn is one rank at a time.
        // Forwards for white, backwards for black.
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        if (array_key_exists($rKey, $this->ranks)) {
            $possibleMoves[] = array($this->getFile(), (string) $this->ranks[$rKey]);
        }
        // If it is the first move of a Pawn, two ranks can be moved in once.
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 2 : -2);
        if ($this->isFirstMove() && array_key_exists($rKey, $this->ranks)) {
            $possibleMoves[] = array($this->getFile(), (string) $this->ranks[$rKey]);
        }
        return $possibleMoves;
    }

    /**
     * Retrieve the possible attack moves.
     * @return array
     */
    public function getPossibleAttackMoves()
    {
        // Pawns can attack other chessman by going diagonally forwards one step.
        $possibleAttackMoves = array();
        $fKey = array_search($this->getFile(), $this->files) - 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            $possibleAttackMoves[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $fKey = array_search($this->getFile(), $this->files) + 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            $possibleAttackMoves[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        return $possibleAttackMoves;
    }
}
