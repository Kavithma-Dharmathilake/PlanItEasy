<?php

class Quoate{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function  eventnew($data){
   
        $this->db->query('INSERT INTO quoate(name,date, stime,etime,remarks,status) VALUES(:name,:date, :stime, :etime, :remarks, :status) ');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':stime', $data['stime']);
        $this->db->bind(':etime', $data['etime']);
        $this->db->bind(':remarks', $data['remarks']);
        $remarks='ongoing';
        $this->db->bind(':status', $remarks);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function getAllEvents(){
        $this->db->query('SELECT * FROM quoate');
        $result = $this->db->resultSet();
        return $result;
    }

    public function edituser($data)
    {
        // The SQL query should update the 'quoate' table, and you should use placeholders for each column to be updated
        $this->db->query('UPDATE quoate SET date = :date, stime = :stime, etime = :etime, remarks = :remarks WHERE id = :id');
    
        // Bind values
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':stime', $data['stime']);
        $this->db->bind(':etime', $data['etime']);
        $this->db->bind(':remarks', $data['remarks']);
        $this->db->bind(':id', $data['id']);
    
        // Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM quoate WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function deleteUser($id){

        $this->db->query('DELETE FROM quoate WHERE id=:id');

        //bind values
        $this->db->bind(':id', $id);
        

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    
    }


   
}


?>