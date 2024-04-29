<?php

class Admin{

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


    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM events WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function countAllUsers()
    {
        $this->db->query("SELECT COUNT(*) AS total_user_count
                          FROM user u
                        ");
        
        // Fetch single result
        $result = $this->db->single();
        return $result->total_user_count;
    }

    public function countAllEventplanners(){
        $this->db->query("SELECT COUNT(*) AS total_eventplanner_count
                          FROM user u
                          WHERE u.role = 'eventplanner'
                        ");
        
        // Fetch single result
        $result = $this->db->single();
        return $result->total_eventplanner_count;
    }

    public function countAllSuppliers(){
        $this->db->query("SELECT COUNT(*) AS total_supplier_count
                          FROM user u
                          WHERE u.role = 'supplier'
                        ");
        
        // Fetch single result
        $result = $this->db->single();
        return $result->total_supplier_count;
    }

    public function getEventStatus($status){
        $this->db->query("SELECT COUNT(*) AS count
                          FROM general_requests 
                            WHERE event_status =:status
                        ");
        $this->db->bind(':status', $status);
        
        // Fetch single result
        $result = $this->db->single();
        return $result;
    }


   
    
}


?>