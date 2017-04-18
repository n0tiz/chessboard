<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;
use Chessboard\Chessmen;

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
        $possibleForwardPaths = $this->getPossibleForwardPaths();
        $possibleAttackPaths = $this->getPossibleAttackPaths();
        $possiblePaths = array_merge($possibleForwardPaths, $possibleAttackPaths);
        return $this->removeEmptyPaths($possiblePaths);
    }

    /**
     * Retrieve the possible forward paths of this Pawn.
     * @return array
     */
    public function getPossibleForwardPaths()
    {
        $possibleForwardPaths = array();
        // We first get the possible forward paths, for a Pawn they are the normal moves.
        if (count($this->getPossibleMoves()) > 0) {
            $possibleMoves = array_reverse($this->getPossibleMoves());
            $possibleMoves[] = $this->getCurrentLocation();
            $possibleForwardPaths[] = array_reverse($possibleMoves);
        }
        // These are the forward paths, they are never attack moves.
        // We need to remove any friendly collisions.
        $possibleForwardPaths = $this->removeFriendlyCollisionsFromPaths($possibleForwardPaths);
        // We need to remove any enemy collisions, but on the same way as we remove friendly collisions.
        $pawn = new Pawn($this->getOppositeColour(), $this->getCurrentLocation());
        $possibleForwardPaths = $pawn->removeFriendlyCollisionsFromPaths($possibleForwardPaths);
        // Now we have forward movement paths which do not collide with anyone.
        return $possibleForwardPaths;
    }

    /**
     * Retrieve the possible attack paths of this Pawn.
     * @return array
     */
    public function getPossibleAttackPaths()
    {
        $possibleAttackPaths = array();
        $chessmen = Chessmen::getInstance();
        foreach ($this->getPossibleAttackMoves() as $possibleAttackMove) {
            // We need to ensure that any of the attack paths does actually attack an enemy.
            list(, $chessman) = $chessmen->find($possibleAttackMove);
            // Only add to the list if is an actual attack path.
            if (!is_null($chessman) && $chessman->getColour() === $this->getOppositeColour()) {
                $possibleAttackPaths[] = array($this->getCurrentLocation(), $possibleAttackMove);
            }
        }
        return $possibleAttackPaths;
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
