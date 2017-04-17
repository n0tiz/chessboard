<?php

namespace DesignPatterns;

use \Exception;

/**
 * @author patrick
 */
abstract class ASingleton
{

    final public function __construct()
    {
        
    }

    final public function __clone()
    {
        throw new Exception("Cannot clone a Singleton");
    }

    final public function __wakeup()
    {
        throw new Exception("Cannot wakeup a Singleton");
    }

    final public function __sleep()
    {
        throw new Exception("Cannot sleep a Singleton");
    }

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }
}
