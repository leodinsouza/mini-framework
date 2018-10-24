<?php

namespace Framework\DI;
use Framework\database\Conn;

class Container{
    public static function getModel($model)
    {
        $class = "\\App\\models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}