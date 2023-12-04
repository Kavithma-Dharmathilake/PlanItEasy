<?php

class User{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function adduser($data){

        
        $this->db->query('INSERT INTO userreq(name, address, email, contact,password, role) VALUES(:name, :address, :email, :contact,:password, :role) ');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    
}


?>