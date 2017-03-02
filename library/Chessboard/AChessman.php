<?php

namespace Chessboard;

/**
 * @author patrick
 */
abstract class AChessman {

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

    public function __construct($colour, $currentLocation) {
        $this->colour = $colour;
        $this->currentLocation = $currentLocation;
    }

    public function __toString() {
        return $this->getIcon();
    }

    public function getIcon() {
        return $this->icons[$this->colour];
    }

    public function getFile() {
        return $this->currentLocation[0];
    }

    public function getRank() {
        return $this->currentLocation[1];
    }

    public function getCurrentLocation() {
        return $this->currentLocation;
    }

    public function getColour() {
        return $this->colour;
    }

    public function getEnemyColour() {
        if ($this->isWhite()) {
            return AChessman::COLOUR_BLACK;
        }
        return AChessman::COLOUR_WHITE;
    }

    public function isWhite() {
        return ($this->colour === AChessman::COLOUR_WHITE);
    }

    public function isBlack() {
        return ($this->colour === AChessman::COLOUR_BLACK);
    }

    public function isFirstMove() {
        return (count($this->previousLocations) === 0);
    }

}
