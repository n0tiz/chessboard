<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;

/**
 * @author patrick
 */
class Bishop extends AChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 3;
        $this->icons[AChessman::COLOUR_WHITE] = "b";
        $this->icons[AChessman::COLOUR_BLACK] = "B";
    }

    public function getPossiblePaths()
    {
        $possiblePaths = array();
        $possiblePaths[0] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) + $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            $rKey = array_search($this->getRank(), $this->ranks) + $x;
            array_push($possiblePaths[0], array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        $possiblePaths[1] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) + $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            $rKey = array_search($this->getRank(), $this->ranks) + $x;
            array_push($possiblePaths[1], array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        $possiblePaths[2] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) - $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            $rKey = array_search($this->getRank(), $this->ranks) - $x;
            array_push($possiblePaths[2], array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        $possiblePaths[3] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files) && array_key_exists(array_search($this->getRank(), $this->ranks) - $x, $this->ranks); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            $rKey = array_search($this->getRank(), $this->ranks) - $x;
            array_push($possiblePaths[3], array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        return $possiblePaths;
    }
}
