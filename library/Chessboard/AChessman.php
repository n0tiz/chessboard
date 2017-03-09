<?php

namespace Chessboard;

/**
 * @author patrick
 */
abstract class AChessman
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

    public function getIcon()
    {
        return $this->icons[$this->getColour()];
    }

    public function getFile()
    {
        return $this->currentLocation[0];
    }

    public function getRank()
    {
        return $this->currentLocation[1];
    }

    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    public function getColour()
    {
        return $this->colour;
    }

    public function isWhite()
    {
        return ($this->getColour() === AChessman::COLOUR_WHITE);
    }

    public function isBlack()
    {
        return ($this->getColour() === AChessman::COLOUR_BLACK);
    }

    public function isFirstMove()
    {
        return (count($this->getPreviousLocations()) === 0);
    }

    public function getPreviousLocations()
    {
        return $this->previousLocations;
    }

    public function move(array $to)
    {
        // keep a history of moves of this chessman
        array_push($this->previousLocations, $this->currentLocation);
        // change the current location of this chessman
        $this->currentLocation = $to;
        return true;
    }

    public function getPossibleMoves()
    {
        $possibleMoves = array();
        foreach ($this->getPossiblePaths() as $possiblePath) {
            array_shift($possiblePath);
            $possibleMoves = array_merge($possibleMoves, $possiblePath);
        }
        return $possibleMoves;
    }

    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }

    public function getPath(array $from, array $to)
    {
        foreach ($this->getPossiblePaths() as $possiblePath) {
            if (in_array($from, $possiblePath) && in_array($to, $possiblePath)) {
                $sKey = array_search($from, $possiblePath);
                $eKey = array_search($to, $possiblePath) + 1;
                return array_slice($possiblePath, $sKey, $eKey);
            }
        }
        return false;
    }
}
