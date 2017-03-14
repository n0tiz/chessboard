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
        for ($rKey = array_search($this->getRank(), $this->ranks), $fKey = array_search($this->getFile(), $this->files); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $rKey ++, $fKey ++) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($rKey = array_search($this->getRank(), $this->ranks), $fKey = array_search($this->getFile(), $this->files); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $rKey ++, $fKey --) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($rKey = array_search($this->getRank(), $this->ranks), $fKey = array_search($this->getFile(), $this->files); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $rKey --, $fKey --) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        unset($possiblePath);
        for ($rKey = array_search($this->getRank(), $this->ranks), $fKey = array_search($this->getFile(), $this->files); array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks); $rKey --, $fKey ++) {
            $possiblePath[] = array((string) $this->files[$fKey], (string) $this->ranks[$rKey]);
        }
        $possiblePaths[] = $possiblePath;
        return $possiblePaths;
    }
}
