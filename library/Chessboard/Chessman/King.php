<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class King extends AChessman implements IChessman {

    public function __construct($colour, $currentLocation) {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 0;
        $this->icons[AChessman::COLOUR_WHITE] = "k";
        $this->icons[AChessman::COLOUR_BLACK] = "K";
    }

    public function move(array $chessmen, array $to) {
        ;
    }

    public function calculateAllowedMoves(array $chessmen) {
        
    }

}
