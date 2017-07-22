<?php

namespace Chessboard;

use \Chessboard\ChessmanList;
use \Chessboard\AChessman;
use \Chessboard\Chessman\Pawn;
use \Exception;

/**
 * @author patrick
 */
class Chessboard
{

    public $files = array("a", "b", "c", "d", "e", "f", "g", "h");
    public $ranks = array("1", "2", "3", "4", "5", "6", "7", "8");

    /**
     * @var ChessmanList
     */
    protected $chessmanList;

    /**
     * @return ChessmanList
     */
    public function getChessmanList()
    {
        return $this->chessmanList;
    }

    /**
     * @param ChessmanList $chessmanList
     */
    public function setChessmanList(ChessmanList $chessmanList)
    {
        $this->chessmanList = $chessmanList;
    }

    /**
     * 
     * @param array $location
     * @return boolean
     */
    public function removeChessmanFromLocation(array $location)
    {
        $chessman = $this->findChessmanOnLocation($location);
        if (!is_null($chessman)) {
            $offset = array_search($chessman, iterator_to_array($this->chessmanList));
            unset($this->chessmanList[$offset]);
            return true;
        }
        return false;
    }

    /**
     * 
     * @param AChessman $chessman
     * @return boolean
     */
    public function removeChessman(AChessman $chessman)
    {
        return $this->removeChessmanFromLocation($chessman->getCurrentLocation());
    }

    /**
     * 
     * @param array $location
     * @return AChessman
     */
    public function findChessmanOnLocation(array $location)
    {
        foreach ($this->chessmanList as $chessman) {
            if ($location == $chessman->getCurrentLocation()) {
                return $chessman;
            }
        }
        return null;
    }

    /**
     * 
     * @param AChessman $chessman
     * @param array $location
     * @return AChessman
     */
    public function findEnemyChessmanOnLocation(AChessman $chessman, array $location)
    {
        $enemyChessman = $this->findChessmanOnLocation($location);
        if (!is_null($enemyChessman)) {
            if ($enemyChessman->getColour() === $chessman->getOppositeColour()) {
                return $enemyChessman;
            }
        }
        return null;
    }

    /**
     * 
     * @param AChessman $chessman
     * @param array $location
     * @return AChessman
     */
    public function findFriendlyChessmanOnLocation(AChessman $chessman, array $location)
    {
        $friendlyChessman = $this->findChessmanOnLocation($location);
        if (!is_null($friendlyChessman)) {
            if ($friendlyChessman->getColour() === $chessman->getColour()) {
                return $friendlyChessman;
            }
        }
        return null;
    }

    /**
     * 
     * @param AChessman $chessman
     * @param array $possiblePaths
     * @return array
     */
    public function removeEnemyCollisionsFromPossiblePaths(AChessman $chessman, array $possiblePaths)
    {
        array_walk($possiblePaths, function(&$possiblePath) use ($chessman) {
            foreach (array_values($possiblePath) as $step => $possibleStep) {
                if ($chessman->getCurrentLocation() == $possibleStep) {
                    continue;
                }
                $enemyChessman = $this->findEnemyChessmanOnLocation($chessman, $possibleStep);
                // if an enemy collision is found on the path, stop here
                if (!is_null($enemyChessman)) {
                    $possiblePath = array_slice($possiblePath, 0, $step + 1);
                    break;
                }
            }
        });
        return $possiblePaths;
    }

    /**
     * 
     * @param AChessman $chessman
     * @param array $possiblePaths
     * @return array
     */
    public function removeFriendlyCollisionsFromPossiblePaths(AChessman $chessman, array $possiblePaths)
    {
        array_walk($possiblePaths, function(&$possiblePath) use ($chessman) {
            foreach (array_values($possiblePath) as $step => $possibleStep) {
                if ($chessman->getCurrentLocation() == $possibleStep) {
                    continue;
                }
                $friendlyChessman = $this->findFriendlyChessmanOnLocation($chessman, $possibleStep);
                // if a friendly collision is found on the path, stop here
                if (!is_null($friendlyChessman)) {
                    $possiblePath = array_slice($possiblePath, 0, $step);
                    break;
                }
            }
        });
        return $possiblePaths;
    }

    /**
     * 
     * @param AChessman $chessman
     * @param array $possiblePaths
     * @return array
     */
    public function removeEmptyPaths(AChessman $chessman, array $possiblePaths)
    {
        // remove paths which start and end at the current location
        return array_filter($possiblePaths, function($possiblePath) use ($chessman) {
            if (0 === count($possiblePath)) {
                return false;
            }
            if (1 === count($possiblePath) && $possiblePath[0] === $chessman->getCurrentLocation()) {
                return false;
            }
            return true;
        });
    }

    /**
     * 
     * @param array $location
     * @return array
     */
    public function getPossiblePathsForChessmanOnLocation(array $location)
    {
        $chessman = $this->findChessmanOnLocation($location);
        if ($chessman instanceof Pawn) {
            $possibleForwardPaths = $chessman->getPossiblePaths();
            // remove friendly collisions from forward paths
            $possibleForwardPaths = $this->removeFriendlyCollisionsFromPossiblePaths($chessman, $possibleForwardPaths);
            // we need to remove any enemy collisions, but on the same way as we remove friendly collisions
            $possibleForwardPaths = $this->removeFriendlyCollisionsFromPossiblePaths(
                new Pawn($chessman->getOppositeColour(), $chessman->getCurrentLocation()), $possibleForwardPaths
            );
            // now we have forward movement paths which do not collide with anyone
            $possibleAttackPaths = $chessman->getPossibleAttackPaths();
            // ensure attack paths actually attack an enemy
            foreach ($possibleAttackPaths as $index => $possibleAttackPath) {
                $possibleStep = end($possibleAttackPath);
                $enemyChessman = $this->findEnemyChessmanOnLocation($chessman, $possibleStep);
                if (is_null($enemyChessman)) {
                    unset($possibleAttackPaths[$index]);
                }
            }
            $possiblePaths = array_merge($possibleForwardPaths, $possibleAttackPaths);
        } else {
            $possiblePaths = $chessman->getPossiblePaths();
            $possiblePaths = $this->removeEnemyCollisionsFromPossiblePaths($chessman, $possiblePaths);
            $possiblePaths = $this->removeFriendlyCollisionsFromPossiblePaths($chessman, $possiblePaths);
            $possiblePaths = $this->removeEmptyPaths($chessman, $possiblePaths);
        }
        return $possiblePaths;
    }

    /**
     * 
     * @param array $location
     * @return array
     */
    public function getPossibleMovesForChessmanOnLocation(array $location)
    {
        $possiblePaths = $this->getPossiblePathsForChessmanOnLocation($location);
        $possibleMoves = array();
        foreach ($possiblePaths as $possiblePath) {
            array_shift($possiblePath);
            $possibleMoves = array_merge($possibleMoves, $possiblePath);
        }
        return $possibleMoves;
    }

    /**
     * 
     * @param AChessman $chessman
     * @return array
     */
    public function getPossiblePathsForChessman(AChessman $chessman)
    {
        return $this->getPossiblePathsForChessmanOnLocation($chessman->getCurrentLocation());
    }

    /**
     * 
     * @param AChessman $chessman
     * @return array
     */
    public function getPossibleMovesForChessman(AChessman $chessman)
    {
        return $this->getPossibleMovesForChessmanOnLocation($chessman->getCurrentLocation());
    }

    /**
     * 
     * @param array $fromLocation
     * @param array $toLocation
     */
    public function moveChessmanFromLocationToLocation(array $fromLocation, array $toLocation)
    {
        $chessman = $this->findChessmanOnLocation($fromLocation);
        if (is_null($chessman)) {
            throw new Exception("No chessman found on location " . json_encode($fromLocation));
        }
        if (!in_array($toLocation, $this->getPossibleMovesForChessman($chessman))) {
            throw new Exception("Move from " . json_encode($fromLocation) . " to " . json_encode($toLocation) . " not allowed for " . $chessman->getChessmanName());
        }
        $enemyChessman = $this->findEnemyChessmanOnLocation($chessman, $toLocation);
        if (!is_null($enemyChessman)) {
            // enemy found on destination
            // remove the enemy chessman
            $this->removeChessman($enemyChessman);
        }
        // move the chessman
        return $chessman->move($toLocation);
    }

    public function __toString()
    {
        $return = implode("|", $this->files) . PHP_EOL;
        foreach (array_reverse($this->ranks) as $rank) {
            $row = array();
            foreach ($this->files as $file) {
                $chessman = $this->findChessmanOnLocation(array($file, $rank));
                if (is_null($chessman)) {
                    $row[] = " ";
                } else {
                    $row[] = $chessman->getIcon();
                }
            }
            $return .= implode("|", $row) . PHP_EOL;
        }
        $return .= implode("|", $this->files) . PHP_EOL;
        return $return;
    }
}