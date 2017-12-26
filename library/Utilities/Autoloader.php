<?php

namespace Utilities;

/**
 * @author patrick
 */
class Autoloader
{

    public function autoload($classname)
    {
        $filename = getcwd() . '/../library/' . str_replace('\\', '/', $classname) . '.php';
        if ('WIN' === strtoupper(substr(PHP_OS, 0, 3))) {
            $filename = str_replace('/', '\\', $filename);
        }
        if (file_exists($filename)) {
            require_once($filename);
        }
    }

    public function register()
    {
        spl_autoload_register(array($this, 'autoload'));
    }

}
