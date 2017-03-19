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
}
