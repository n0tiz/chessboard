<?php

namespace Chessboard;

/**
 * @author patrick
 */
trait TIterator {
    
    public $array = array();
    public $keyPosition = 0;

    public function current() {
        return $this->array[$this->key()];
    }

    public function key() {
        return array_keys($this->array)[$this->keyPosition];
    }

    public function next() {
        ++$this->keyPosition;
    }

    public function rewind() {
        $this->keyPosition = 0;
    }

    public function valid() {
        if (array_key_exists($this->keyPosition, array_keys($this->array))) {
            return (array_key_exists($this->key(), $this->array));
        }
        return false;
    }

    public function count() {
        return count($this->array);
    }

    public function offsetExists($offset) {
        return (isset($this->array[$offset]));
    }

    public function offsetGet($offset) {
        if ($this->offsetExists($offset)) {
            return $this->array[$offset];
        }
        return null;
    }

    public function offsetSet($offset, $value) {
        $this->set($offset, $value);
    }

    public function set($offset, $value) {
        if (is_null($offset)) {
            array_push($this->array, $value);
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset) {
        unset($this->array[$offset]);
    }
    
}
