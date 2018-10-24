<?php

namespace Framework\database;

class Conn{
    
    public static function getDb()
    {
        return new \PDO('mysql:host=localhost;dbname=fmwk', 'root', 'secret', array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

}