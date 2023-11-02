<?php

class User
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    public function register($data)
    {


        $this->db->query('INSERT INTO user(name, address, email, contact,password, role) VALUES(:name, :address, :email, :contact,:password, :role) ');
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

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();


        $hashed_password = $row->password;


        // Verify the password
        if (password_verify($password, $hashed_password)) {
            return $row; // Password is correct
        } else {
            return false; // Password is incorrect
        }

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

    public function userReq($data)
    {
        $this->db->query('INSERT INTO userreq(name, email, phone,bday,gender,address,bname,bno,proof,password,stype,role) VALUES(:name, :email, :phone,:bday,:gender,:address,:bname,:bno,:proof,:password,:stype,:role) ');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':bday', $data['gender']);
        $this->db->bind(':address', $data['nic']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':bno', $data['bno']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':proof', $data['proof']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':stype', $data['stype']);


        $role = ($data['stype'] === 'Event Planner') ? 'Event Planner' : 'Supplier';
        $this->db->bind(':role', $role);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }
}


?>