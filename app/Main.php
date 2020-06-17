<?php


namespace App;


use Kernel\DB;

class Main
{
    private $db;

    public function run(){
        echo "Boilerplate is ready.\n";

        $this->db = new DB(
            env_get('SRC_DB_HOST'),
            env_get('SRC_DB_PORT'),
            env_get('SRC_DB_USER'),
            env_get('SRC_DB_PASS'),
            env_get('SRC_DB_NAME')
        );

        $this->db->connect();
        if($this->db->error){
            die("Database Connection Failed!");
        }
    }
}