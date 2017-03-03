<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Rook extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 5;
        $this->icons[AChessman::COLOUR_WHITE] = "r";
        $this->icons[AChessman::COLOUR_BLACK] = "R";
    }

    public function move(array $chessmen, array $to)
    {
        ;
    }

    public function calculateAllowedMoves(array $chessmen)
    {
        
    }
}
