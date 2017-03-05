<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Knight extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "n";
        $this->icons[AChessman::COLOUR_BLACK] = "N";
    }

    public function getPossibleMoves()
    {
        // move in L
        ;
    }

    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }
}
