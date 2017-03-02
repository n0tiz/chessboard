<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class Bishop extends AChessman implements IChessman {

    public function __construct($colour, $currentLocation) {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "b";
        $this->icons[AChessman::COLOUR_BLACK] = "B";
    }

    public function move(array $to) {
        ;
    }

}
