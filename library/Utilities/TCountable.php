<?php

namespace Utilities;

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
