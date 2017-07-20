<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\Chessman\Queen;

/**
 * @author patrick
 */
class King extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 0;
        $this->icons[AChessman::COLOUR_WHITE] = "k";
        $this->icons[AChessman::COLOUR_BLACK] = "K";
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // King can perform the same moves as the Queen, but limited to one step at a time.
        $queen = new Queen($this->getColour(), $this->getCurrentLocation());
        foreach ($queen->getPossiblePaths() as $possiblePath) {
            $possiblePaths[] = array_slice($possiblePath, 0, 2);
        }
        return $possiblePaths;
    }

    /**
     * Check if this King is check or not.
     * @return boolean
     */
    public function isCheck()
    {
        $chessmen = Chessmen::getInstance();
        // go through each player's attack moves and verify if the attack is on the king.
        foreach ($chessmen as $chessman) {
            if ($chessman->getColour() === $this->getOppositeColour() && in_array($this->getCurrentLocation(), $chessman->getPossibleAttackMoves())) {
                return true;
            }
        }
        return false;
    }

    /**
     * Check if this King is mate or not.
     * @return boolean
     */
    public function isMate()
    {
        
    }
}
