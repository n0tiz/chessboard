<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

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
        $this->html[AChessman::COLOUR_WHITE] = "&#9815;";
        $this->html[AChessman::COLOUR_BLACK] = "&#9821;";
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // Bishops can move diagonally forwards and backwards.
        $possiblePaths = $this->getDiagonalPaths();
        return $possiblePaths;
    }

}
