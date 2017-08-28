<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

/**
 * This is the only chessman where attack moves are different than normal moves.
 * Therefore we will be overriding the "getPossibleMoves" and "getPossibleAttackMoves" methods.
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
     * Retrieve the possible moves.
     * @return array
     */
    public function getPossibleMoves()
    {
        $rankOffsets = array();
        $rankOffsets[] = ($this->isWhite() ? 1 : -1);
        // Two steps forward is allowed, if this is the first move.
        if ($this->isFirstMove()) {
            $rankOffsets[] = ($this->isWhite() ? 2 : -2);
        }
        $possibleMoves = array();
        foreach ($rankOffsets as $rankOffset) {
            $key = array_search($this->getRank(), $this->ranks) + $rankOffset;
            if (array_key_exists($key, $this->ranks)) {
                $possibleMoves[] = array($this->getFile(), (string) $this->ranks[$key]);
            }
        }
        return $possibleMoves;
    }

    /**
     * Retrieve the possible attack moves.
     * @return array
     */
    public function getPossibleAttackMoves()
    {
        $rankOffset = ($this->isWhite() ? 1 : -1);
        $possibleAttackMoves = array();
        $rKey = array_search($this->getRank(), $this->ranks) + $rankOffset;
        if (array_key_exists($rKey, $this->ranks)) {
            $fileOffsets = array();
            $fileOffsets[] = -1;
            $fileOffsets[] = 1;
            foreach ($fileOffsets as $fileOffset) {
                $fKey = array_search($this->getFile(), $this->files) + $fileOffset;
                if (array_key_exists($fKey, $this->files)) {
                    $possibleAttackMoves[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
                }
            }
        }
        return $possibleAttackMoves;
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
        return $possiblePaths;
    }

    /**
     * Retrieve the possible attack paths of this Pawn.
     * @return array
     */
    public function getPossibleAttackPaths()
    {
        $possibleAttackPaths = array();
        foreach ($this->getPossibleAttackMoves() as $possibleAttackMove) {
            $possibleAttackPaths[] = array($this->getCurrentLocation(), $possibleAttackMove);
        }
        return $possibleAttackPaths;
    }

}
