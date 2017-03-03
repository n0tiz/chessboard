<?php

namespace Chessboard;

/**
 * @author patrick
 */
trait TCountable
{

    protected $array = array();

    public function count()
    {
        return count($this->array);
    }
}
