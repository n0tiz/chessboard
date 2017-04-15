<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;

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
        // Rook can go vertically and horizontally.
        // Horizontally, the rank will stay the same.
        // Files will go from the beginning of the files until the last.
        foreach ($this->files as $file) {
            $horizontalPath[] = array($file, $this->getRank());
            if ($file == $this->getFile() && count($horizontalPath) > 1) {
                $possiblePaths[] = array_reverse($horizontalPath);
                unset($horizontalPath);
                $horizontalPath[] = $this->getCurrentLocation();
            }
        }
        $possiblePaths[] = $horizontalPath;
        // Vertically, the file will stay the same.
        // Ranks will go from the beginning of the ranks until the last.
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
