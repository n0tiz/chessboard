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

    /**
     * Move a chessman to a certain location.
     * Check for collisions and/or attack moves.
     * @param array $from
     * @param array $to
     * @return boolean
     */
    public function move(array $from, array $to)
    {
        // find the chessman which we want to move
        list(, $chessman) = $this->find($from);
        if (is_null($chessman)) {
            throw new Exception("Chessman not found.");
        }
        // we want to move the chessman to a location it is not possible to move it to
        if (!in_array($to, $chessman->getPossibleMoves()) && !in_array($to, $chessman->getPossibleAttackMoves())) {
            throw new Exception("Move not possible for chessman.");
        }
        // move has collisions with other chessman
        if ($this->moveHasCollision($chessman->getPath($from, $to))) {
            throw new Exception("Collision detected in move.");
        }
        // check if this move is an attack move
        list(, $enemyChessman) = $this->find($to);
        // if this move is only possible as an attack move, and there is no enemy chessman available
        if (is_null($enemyChessman) && in_array($to, $chessman->getPossibleAttackMoves()) && !in_array($to, $chessman->getPossibleMoves())) {
            throw new Exception("Attack move attempted, but no opponent found.");
        }
        // there is an enemy where we want to move to
        if (!is_null($enemyChessman)) {
            // move is not an attack move
            if (!in_array($to, $chessman->getPossibleAttackMoves())) {
                throw new Exception("Invalid attack move attempted.");
            }
            // if the enemy chessman is in the same team
            if ($chessman->getColour() === $enemyChessman->getColour()) {
                throw new Exception("Attack move, but opponent is in the same team.");
            }
            // remove enemy chessman
            $this->remove($to);
        }
        return $chessman->move($to);
    }

    /**
     * Returns true if there is a collision in the path.
     * @param array $path
     * @return boolean
     */
    public function moveHasCollision(array $path)
    {
        foreach (array_slice($path, 1, count($path) - 2) as $location) {
            list(, $collisionChessman) = $this->find($location);
            if (!is_null($collisionChessman)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Find a chessman on a certain location.
     * @param array $location
     * @return array|boolean
     */
    public function find(array $location)
    {
        foreach ($this as $offset => $chessman) {
            if ($chessman->getCurrentLocation() === $location) {
                return array($offset, $chessman);
            }
        }
        return false;
    }

    /**
     * Remove a chessman from a certain location.
     * @param array $location
     * @return boolean
     */
    public function remove(array $location)
    {
        // if $this->find doesn't find anything, it will return false
        // php > list($a, $b) = false;
        // php > var_dump($a, $b);
        // NULL
        // NULL
        // php > 
        list($offset, ) = $this->find($location);
        if (!is_null($offset)) {
            $this->offsetUnset($offset);
            return true;
        }
        return false;
    }
}
