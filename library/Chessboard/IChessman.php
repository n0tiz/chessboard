<?php

namespace Chessboard;

/**
 * @author patrick
 */
interface IChessman {

    public function move(array $chessmen, array $to);

    public function calculateAllowedMoves(array $chessmen);
}
