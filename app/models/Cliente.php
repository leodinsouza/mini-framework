<?php

namespace App\models;

class Cliente{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function all(){
        $query = "select * from clientes";
        return $this->db->query($query);
    }
}