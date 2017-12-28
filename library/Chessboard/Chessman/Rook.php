<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

/**
 * @author patrick
 */
class Rook extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 5;
        $this->icons[AChessman::COLOUR_WHITE] = "r";
        $this->icons[AChessman::COLOUR_BLACK] = "R";
        $this->html[AChessman::COLOUR_WHITE] = "&#9814;";
        $this->html[AChessman::COLOUR_BLACK] = "&#9820;";
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // Rook can go vertically and horizontally.
        $horizontalPaths = $this->getHorizontalPaths();
        $verticalPaths = $this->getVerticalPaths();
        $possiblePaths = array_merge($horizontalPaths, $verticalPaths);
        return $possiblePaths;
    }

}
