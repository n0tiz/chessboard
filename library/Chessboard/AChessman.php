<?php

namespace Chessboard;

use \Chessboard\IChessman;

/**
 * @author patrick
 */
abstract class AChessman implements IChessman
{

    const COLOUR_WHITE = "white";
    const COLOUR_BLACK = "black";

    protected $files = array("a", "b", "c", "d", "e", "f", "g", "h");
    protected $ranks = array("1", "2", "3", "4", "5", "6", "7", "8");
    protected $colour = "";
    protected $currentLocation = "";
    protected $previousLocations = array();
    protected $icons = array(
        AChessman::COLOUR_WHITE => "",
        AChessman::COLOUR_BLACK => "",
    );
    protected $valuation = 0;

    public function __construct($colour, $currentLocation)
    {
        $this->colour = $colour;
        $this->currentLocation = $currentLocation;
    }

    public function __toString()
    {
        return $this->getIcon();
    }

    /**
     * @return string
     */
    public function getChessmanName()
    {
        $className = get_class($this);
        $classNameParts = explode("\\", $className);
        $chessmanName = end($classNameParts);
        return $chessmanName;
    }

    /**
     * Retrieve the icon of this chessman.
     * This will be lower cased when the colour is white.
     * This will be upper cased when the colour is black.
     * @return string
     */
    public function getIcon()
    {
        return $this->icons[$this->getColour()];
    }

    /**
     * Retrieve the file this chessman currently resides on.
     * @return string
     */
    public function getFile()
    {
        return $this->getCurrentLocation()[0];
    }

    /**
     * Retrieve the rank this chessman currently resides on.
     * @return string
     */
    public function getRank()
    {
        return $this->getCurrentLocation()[1];
    }

    /**
     * Retrieve the current location of this chessman.
     * @return array
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * Retrieve the colour of this chessman.
     * @return string
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Retrieve the colour of the opposition.
     * @return string
     */
    public function getOppositeColour()
    {
        return ($this->isWhite() ? AChessman::COLOUR_BLACK : AChessman::COLOUR_WHITE);
    }

    /**
     * Check if the colour of this chessman is white.
     * @return boolean
     */
    public function isWhite()
    {
        return (bool) ($this->getColour() === AChessman::COLOUR_WHITE);
    }

    /**
     * Check if the colour of this chessman is black.
     * @return boolean
     */
    public function isBlack()
    {
        return (bool) ($this->getColour() === AChessman::COLOUR_BLACK);
    }

    /**
     * Check if this is the first move of this chessman.
     * @return boolean
     */
    public function isFirstMove()
    {
        return (bool) (count($this->getPreviousLocations()) === 0);
    }

    /**
     * Retrieve all the previous locations this chessman has been.
     * @return array
     */
    public function getPreviousLocations()
    {
        return $this->previousLocations;
    }

    /**
     * Move a chessman to a certain location. Also keep a history of locations.
     * @param array $to
     * @return boolean
     */
    public function move(array $to)
    {
        // Keep a history of locations this chessman has been.
        $this->previousLocations[] = $this->currentLocation;
        // Change the current location of this chessman.
        $this->currentLocation = $to;
        return true;
    }

    /**
     * Retrieve the possible moves.
     * @return array
     */
    public function getPossibleMoves()
    {
        $possibleMoves = array();
        foreach ($this->getPossiblePaths() as $possiblePath) {
            array_shift($possiblePath);
            $possibleMoves = array_merge($possibleMoves, $possiblePath);
        }
        return $possibleMoves;
    }

    /**
     * Retrieve the possible attack moves.
     * @return array
     */
    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }

    /**
     * Retrieve the path a chessman needs to follow to get from $from to $to.
     * Location $from is required to be the current location of the chessman.
     * @param array $from
     * @param array $to
     * @return array|boolean
     */
    public function getPath(array $from, array $to)
    {
        if ($from === $this->getCurrentLocation()) {
            foreach ($this->getPossiblePaths() as $possiblePath) {
                if (in_array($from, $possiblePath) && in_array($to, $possiblePath)) {
                    $sKey = array_search($from, $possiblePath);
                    $eKey = array_search($to, $possiblePath) + 1;
                    return array_slice($possiblePath, $sKey, $eKey);
                }
            }
        }
        return false;
    }

    /**
     * Get the possible diagonal paths from the current location of this chessman.
     * @return array
     */
    public function getDiagonalPaths()
    {
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

    /**
     * Get the possible horizontal paths from the current location of this chessman.
     * @return array
     */
    public function getHorizontalPaths()
    {
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
        return $possiblePaths;
    }

    /**
     * Get the possible vertical paths from the current location of this chessman.
     * @return array
     */
    public function getVerticalPaths()
    {
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
