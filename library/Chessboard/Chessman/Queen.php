<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\Chessman\Rook;
use \Chessboard\Chessman\Bishop;

/**
 * @author patrick
 */
class Queen extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 9;
        $this->icons[AChessman::COLOUR_WHITE] = "q";
        $this->icons[AChessman::COLOUR_BLACK] = "Q";
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // Queen can perform all the moves of a Rook and Bishop.
        $bishop = new Bishop($this->getColour(), $this->getCurrentLocation());
        $rook = new Rook($this->getColour(), $this->getCurrentLocation());
        $possiblePaths = array_merge($bishop->getPossiblePaths(), $rook->getPossiblePaths());
        return $possiblePaths;
    }
}
