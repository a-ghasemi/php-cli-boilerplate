<?php


namespace App;


class Kernel
{
    private $db;

    public function run(){
        echo "Boilerplate is ready.\n";

        $this->db = new DB(
            get_env('SRC_DB_HOST'),
            get_env('SRC_DB_PORT'),
            get_env('SRC_DB_USER'),
            get_env('SRC_DB_PASS'),
            get_env('SRC_DB_NAME')
        );

        $this->db->connect();
        if($this->db->error){
            die("Database Connection Failed!");
        }
    }
}