<?php

namespace Chessboard;

use \Iterator;
use \ArrayAccess;
use \Countable;
use \Exception;

/**
 * @author patrick
 */
class Chessmen implements Iterator, Countable, ArrayAccess
{

    use TIterator,
        TCountable,
        TArrayAccess;

    public function move(array $from, array $to)
    {
        // find chessman which we want to move
        list(, $chessman) = $this->find($from);
        if (false === $chessman) {
            throw new Exception("Chessman we want to move can not be found");
        }
        $possibleMoves = $chessman->getPossibleMoves();
        // if the wanted move is in the possible moves, we will start looking for collisions
        if (in_array($to, $possibleMoves)) {
            // @todo: look for collisions
            // no collision found, so move the chessman
            return $chessman->move($to);
        }
        $possibleAttackMoves = $chessman->getPossibleAttackMoves();
        if (in_array($to, $possibleAttackMoves)) {
            list(, $enemyChessman) = $this->find($to);
            // check if the destination chessman is actually an enemy or not
            if (false === $enemyChessman) {
                throw new Exception("Enemy chessman can not be found");
            }
            if ($chessman->getColour() === $enemyChessman->getColour()) {
                throw new Exception("Chessman can not take their own colour");
            }
            // enemy chessman found, remove it, move chessman
            $this->remove($to);
            return $chessman->move($to);
        }
        return false;
    }

    public function find(array $location)
    {
        foreach ($this->array as $offset => $chessman) {
            if ($chessman->getCurrentLocation() === $location) {
                return array($offset, $chessman);
            }
        }
        return array(false, false);
    }

    public function remove(array $location)
    {
        list($offset, ) = $this->find($location);
        $this->offsetUnset($offset);
        return true;
    }
}
