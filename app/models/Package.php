<?php

class Package{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function  eventnew($data){
   
        $this->db->query('INSERT INTO events(name,description, img,price,type) VALUES(:name, :description, :img,:price,:type) ');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':img', $data['img']);
        $this->db->bind(':type', $data['type']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function getAllEvents(){
        $this->db->query('SELECT * FROM events');
        $result = $this->db->resultSet();
        return $result;
    }

    public function edituser($data)
    {
        $this->db->query('UPDATE events SET name=:name, type=:type, price=:price, description=:description, img=:img WHERE id=:id');

     
        //bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':description', $data['description']);
         $this->db->bind(':img', $data['img']);
        $this->db->bind(':id', $data['id']);


        //Execute the query
        if ($this->db->execute()) {
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

    public function deleteUser($id){

        $this->db->query('DELETE FROM events WHERE id=:id');

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