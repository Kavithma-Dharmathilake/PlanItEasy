<?php

class User{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function register($data){

        $this->db->query('INSERT INTO user(name, address, email, contact, username, password, role) VALUES(name=:name, address:address, email:email, contact:contact, username:username, password:password, role:role) ');


    }

    public function login($email, $password){

    }
}


?>