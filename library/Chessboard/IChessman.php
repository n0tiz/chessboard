<?php

namespace Chessboard;

/**
 * @author patrick
 */
interface IChessman
{

    /**
     * Calculate the possible paths this chessman can move via.
     * @return array
     */
    public function getPossiblePaths();

}
