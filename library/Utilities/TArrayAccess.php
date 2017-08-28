<?php

namespace Utilities;

/**
 * @author patrick
 */
trait TArrayAccess
{

    protected $array = array();

    public function offsetExists($offset)
    {
        return (isset($this->array[$offset]));
    }

    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return $this->array[$offset];
        }
        return null;
    }

    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    public function set($offset, $value)
    {
        if (is_null($offset)) {
            array_push($this->array, $value);
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }

}
