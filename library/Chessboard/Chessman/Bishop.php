<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;

/**
 * @author patrick
 */
class Bishop extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "b";
        $this->icons[AChessman::COLOUR_BLACK] = "B";
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // Bishops can move diagonally forwards and backwards.
        $possiblePaths = $this->getDiagonalPaths();
        $possiblePaths = $this->removeEnemyCollisionsFromPaths($possiblePaths);
        $possiblePaths = $this->removeFriendlyCollisionsFromPaths($possiblePaths);
        return $this->removeEmptyPaths($possiblePaths);
    }
}
