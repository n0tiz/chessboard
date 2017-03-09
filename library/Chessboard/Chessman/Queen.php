<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;
use \Chessboard\Chessman\Rook;
use \Chessboard\Chessman\Bishop;

/**
 * @author patrick
 */
class Queen extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 9;
        $this->icons[AChessman::COLOUR_WHITE] = "q";
        $this->icons[AChessman::COLOUR_BLACK] = "Q";
    }

    public function getPossiblePaths()
    {
        // move diagonally, like a bishop
        $bishop = new Bishop($this->getColour(), $this->getCurrentLocation());
        // move horizontal, vertical, like a rook
        $rook = new Rook($this->getColour(), $this->getCurrentLocation());
        $possiblePaths = array_merge($bishop->getPossiblePaths(), $rook->getPossiblePaths());
        return $possiblePaths;
    }
}
