<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;

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

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // array(
        //  array(file, rank)
        // )
        $pathKeyAdditions = array(
            array(1, -2),
            array(2, -1),
            array(2, 1),
            array(1, 2),
            array(-1, 2),
            array(-2, 1),
            array(-2, -1),
            array(-1, -2),
        );
        foreach ($pathKeyAdditions as list($fKeyAddition, $rKeyAddition)) {
            $fKey = array_search($this->getFile(), $this->files) + $fKeyAddition;
            $rKey = array_search($this->getRank(), $this->ranks) + $rKeyAddition;
            if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
                $possiblePaths[] = array($this->getCurrentLocation(), array($this->files[$fKey], $this->ranks[$rKey]));
            }
        }
        $possiblePaths = $this->removeFriendlyCollisionsFromPaths($possiblePaths);
        return $this->removeEmptyPaths($possiblePaths);
    }
}
