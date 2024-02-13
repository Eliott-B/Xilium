<?php

namespace app\models;

use app\Database;

abstract class Model
{
    private Database $db;
    private string $table;


    public function __construct($database)
    {
        $this->db = $database;
    }

    public function all(){
        $db->query("select * from $this->table");
    }


}