<?php

namespace Chessboard;

/**
 * @author patrick
 */
trait TCountable {

    public function count() {
        return count($this->array);
    }

}
