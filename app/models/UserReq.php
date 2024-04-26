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
            $id=$this->db->lastInsertedId();
            $this->db->query('INSERT INTO portfolio(sid) VALUES(:id)');
            $this->db->bind(':role', $id);

            return true;
        } else {
            return false;
        }

    }
   
    
}


?>