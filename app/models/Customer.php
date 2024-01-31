<?php

class Customer{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function  newevent($data){

        //adding new event to the system
   
        $this->db->query('INSERT INTO general_requests(event_type,theme,guest_count,minbudget,maxbudget,location,starttime, endtime,date,event_status,pay_status,idcustomer) 
        VALUES(:event_type, :theme,:guest_count,:minbudget,:maxbudget,:location,:starttime, :endtime,:date,:event_status, :pay_status,:idcustomer) ');
        $this->db->bind(':event_type', $data['type']);
        $this->db->bind(':theme', $data['theme']);
        $this->db->bind(':guest_count', $data['count']);
        $this->db->bind(':minbudget', $data['min']);
        $this->db->bind(':maxbudget', $data['max']);
        $this->db->bind(':location', $data['loc']);
        $this->db->bind(':starttime', $data['start']);
        $this->db->bind(':endtime', $data['end']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':event_status', $data['estatus']);
        $this->db->bind(':pay_status', $data['pstatus']);
        $this->db->bind(':idcustomer', $data['cusid']);
      

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


    public function getAllEvents($id){
    
        $this->db->query('SELECT * FROM general_requests Where idcustomer =:id');
      
        $this->db->bind(':id', $id);
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

    public function getEventById($id)
    {
        $this->db->query('SELECT * FROM general_requests WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
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