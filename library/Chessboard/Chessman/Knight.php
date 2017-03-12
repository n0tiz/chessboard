<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

/**
 * @author patrick
 */
class Knight extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "n";
        $this->icons[AChessman::COLOUR_BLACK] = "N";
    }

    public function getPossiblePaths()
    {
        ;
    }
}
