<?php

namespace Chessboard;

/**
 * @author patrick
 */
interface IChessman
{

    public function move(array $to);

    public function getPossibleMoves();

    public function getPossibleAttackMoves();
}
