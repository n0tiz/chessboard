<?php

namespace Chessboard\Chessman;

use Chessboard\AChessman;

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

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths()
    {
        // Bishops can move diagonally forwards and backwards.
        for ($fKey = array_search($this->getFile(), $this->files), $rKey = array_search($this->getRank(), $this->ranks); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $fKey ++, $rKey ++) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($fKey = array_search($this->getFile(), $this->files), $rKey = array_search($this->getRank(), $this->ranks); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $fKey --, $rKey ++) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($fKey = array_search($this->getFile(), $this->files), $rKey = array_search($this->getRank(), $this->ranks); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $fKey --, $rKey --) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($fKey = array_search($this->getFile(), $this->files), $rKey = array_search($this->getRank(), $this->ranks); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $fKey ++, $rKey --) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        return $possiblePaths;
    }
}
