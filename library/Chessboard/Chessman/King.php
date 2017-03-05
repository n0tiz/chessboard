<?php

namespace Chessboard\Chessman;

use \Chessboard\AChessman;
use \Chessboard\IChessman;

/**
 * @author patrick
 */
class King extends AChessman implements IChessman
{

    public function __construct($colour, $currentLocation)
    {
        parent::__construct($colour, $currentLocation);
        $this->valuation = 0;
        $this->icons[AChessman::COLOUR_WHITE] = "k";
        $this->icons[AChessman::COLOUR_BLACK] = "K";
    }

    public function getPossibleMoves()
    {
        // king can move one file and/or rank in any direction
        $possibleMoves = array();
        // one rank forward
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        // one rank backwards
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? -1 : 1);
        // check if the position exists
        if (array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array($this->getFile(), (string) $this->ranks[$rKey]));
        }
        // one file leftwards
        $fKey = array_search($this->getFile(), $this->files) - 1;
        // check if the position exists
        if (array_key_exists($fKey, $this->files)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], $this->getRank()));
        }
        // one file rightwards
        $fKey = array_search($this->getFile(), $this->files) + 1;
        // check if the position exists
        if (array_key_exists($fKey, $this->files)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], $this->getRank()));
        }
        // one rank forward, one file leftwards
        $fKey = array_search($this->getFile(), $this->files) - 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        // one rank forward, one file rightwards
        $fKey = array_search($this->getFile(), $this->files) + 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? 1 : -1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        // one rank backward, one file leftwards
        $fKey = array_search($this->getFile(), $this->files) - 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? -1 : 1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        // one rank backward, one file rightwards
        $fKey = array_search($this->getFile(), $this->files) + 1;
        $rKey = array_search($this->getRank(), $this->ranks) + ($this->isWhite() ? -1 : 1);
        // check if the position exists
        if (array_key_exists($fKey, $this->files) && array_key_exists($rKey, $this->ranks)) {
            array_push($possibleMoves, array((string) $this->files[$fKey], (string) $this->ranks[$rKey]));
        }
        return $possibleMoves;
    }

    public function getPossibleAttackMoves()
    {
        return $this->getPossibleMoves();
    }
}
