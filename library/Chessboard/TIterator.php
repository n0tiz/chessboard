<?php

namespace Chessboard;

/**
 * @author patrick
 */
trait TIterator
{

    protected $array = array();
    protected $keyPosition = 0;

    public function current()
    {
        return $this->array[$this->key()];
    }

    public function key()
    {
        return array_keys($this->array)[$this->keyPosition];
    }

    public function next()
    {
        ++$this->keyPosition;
    }

    public function rewind()
    {
        $this->keyPosition = 0;
    }

    public function valid()
    {
        if (array_key_exists($this->keyPosition, array_keys($this->array))) {
            return (array_key_exists($this->key(), $this->array));
        }
        return false;
    }
}
