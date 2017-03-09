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

    public function getPossiblePaths()
    {
        $possiblePaths = array();
        $possiblePaths[0] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) - $x, $this->files); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) - $x;
            array_push($possiblePaths[0], array((string) $this->files[$fKey], $this->getRank()));
        }
        $possiblePaths[1] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getFile(), $this->files) + $x, $this->files); $x ++) {
            $fKey = array_search($this->getFile(), $this->files) + $x;
            array_push($possiblePaths[1], array((string) $this->files[$fKey], $this->getRank()));
        }
        $possiblePaths[2] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getRank(), $this->ranks) - $x, $this->ranks); $x ++) {
            $rKey = array_search($this->getRank(), $this->ranks) - $x;
            array_push($possiblePaths[2], array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        $possiblePaths[3] = array($this->getCurrentLocation());
        for ($x = 1; array_key_exists(array_search($this->getRank(), $this->ranks) + $x, $this->ranks); $x ++) {
            $rKey = array_search($this->getRank(), $this->ranks) + $x;
            array_push($possiblePaths[3], array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        return $possiblePaths;
    }
}
