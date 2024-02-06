<?php

class Supplier
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check rows

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getUserById($id)
    {

        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function getPhotographers($stype)
    {
        $this->db->query('SELECT * FROM user WHERE stype =  :stype');
        $this->db->bind(':stype', $stype);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getOneSupplier($id)
    {
        $this->db->query('SELECT * FROM user WHERE id =  :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }



    public function userReq($data)
    {
        $this->db->query('INSERT INTO userreq(name, email, phone,bday,gender,address,nic,bname,bno,proof,password,stype,role) VALUES(:name, :email, :phone,:bday,:gender,:address,:nic,:bname,:bno,:proof,:password,:stype,:role) ');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':bday', $data['gender']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':bno', $data['bno']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':proof', $data['proof']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':stype', $data['stype']);


        $role = ($data['stype'] === 'Event Planner') ? 'eventplanner' : 'supplier';
        $this->db->bind(':role', $role);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllReq()
    {
        $this->db->query('SELECT * FROM quoate');
        $result = $this->db->resultSet();

        return $result;
    }

    public function getOneReq($id)
    {
        $this->db->query('SELECT * FROM quoate WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function getCustomer($id)
    {
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }

    public function getEvent($id)
    {
        $this->db->query('SELECT * FROM general_requests WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM user');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getReqById($id)
    {
        $this->db->query('SELECT * FROM userreq WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function acceptQuote($data)
    {
        $this->db->query('UPDATE quoate SET price=:price, status=:status, s_remark=:remark, received_date=:date, q_status=:qstatus WHERE id=:id');
        $qstatus = "Request Sent";
        $status = "Request Received";
        date_default_timezone_set('UTC');
        $date = date('Y-m-d');

        //bind values
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':status', $status);
        $this->db->bind(':qstatus', $qstatus);
        $this->db->bind(':date', $date);
        $this->db->bind(':id', $data['id']);
        die($data['id']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {

        $this->db->query('DELETE FROM user WHERE id=:id');

        //bind values
        $this->db->bind(':id', $id);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addUser($data)
    {
        $this->db->query('INSERT INTO user(name, address, email, contact, password, role,stype, bname, bno, nic, baddress) VALUES(:name, :address, :email, :contact, :password, :role, :stype,:bname, :bno, :nic, :baddress)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':bno', $data['bno']);
        $this->db->bind(':baddress', $data['address']);
        $this->db->bind(':stype', $data['stype']);

        $this->db->query('INSERT INTO user(name, address, email, contact, password, role,stype, bname, bno, nic, baddress) VALUES(:name, :address, :email, :contact, :password, :role, :stype,:bname, :bno, :nic, :baddress)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':bno', $data['bno']);
        $this->db->bind(':baddress', $data['address']);
        $this->db->bind(':stype', $data['stype']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //calander functions
    public function fetchEvents($id)
    {
        $this->db->query('SELECT * FROM eventcalender WHERE uid = :sid');
        $this->db->bind(':sid', $id);
        $result = $this->db->resultSet();

        return $result;

    }

    public function addEvent($eventName, $eventDate)
    {

        $query = "INSERT INTO events (title, start) VALUES ('$eventName', '$eventDate')";
        $result = $this->db->query($query);

        return $result;
    }

    public function  edituser($data)
    {
        $this->db->query('UPDATE INTO (name, address, email, contact, password, role,stype, bname, bno, nic, baddress) VALUES(:name, :address, :email, :contact, :password, :role, :stype,:bname, :bno, :nic, :baddress)');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':contact', $data['contact']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':bno', $data['bno']);
        $this->db->bind(':baddress', $data['address']);
        $this->db->bind(':stype', $data['stype']);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
