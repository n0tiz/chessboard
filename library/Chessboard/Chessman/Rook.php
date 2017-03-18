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
    }

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        foreach ($this->files as $file) {
            $horizontalPath[] = array($file, $this->getRank());
            if ($file == $this->getFile() && count($horizontalPath) > 1) {
                $possiblePaths[] = array_reverse($horizontalPath);
                unset($horizontalPath);
                $horizontalPath[] = $this->getCurrentLocation();
            }
        }
        $possiblePaths[] = $horizontalPath;
        foreach ($this->ranks as $rank) {
            $verticalPath[] = array($this->getFile(), $rank);
            if ($rank == $this->getRank() && count($verticalPath) > 1) {
                $possiblePaths[] = array_reverse($verticalPath);
                unset($verticalPath);
                $verticalPath[] = $this->getCurrentLocation();
            }
        }
        $possiblePaths[] = $verticalPath;
        return $possiblePaths;
    }
}
