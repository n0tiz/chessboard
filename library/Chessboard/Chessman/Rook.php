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

    public function getPossiblePaths()
    {
        $possiblePaths = array();
        $horizontalPath = array();
        foreach ($this->files as $file) {
            array_push($horizontalPath, array($file, $this->getRank()));
            if ($file == $this->getFile() && count($horizontalPath) > 1) {
                array_push($possiblePaths, array_reverse($horizontalPath));
                $horizontalPath = array($this->getCurrentLocation());
            }
        }
        array_push($possiblePaths, $horizontalPath);
        $verticalPath = array();
        foreach ($this->ranks as $rank) {
            array_push($verticalPath, array($this->getFile(), $rank));
            if ($rank == $this->getRank() && count($verticalPath) > 1) {
                array_push($possiblePaths, array_reverse($verticalPath));
                $verticalPath = array($this->getCurrentLocation());
            }
        }
        array_push($possiblePaths, $verticalPath);
        return $possiblePaths;
    }
}
