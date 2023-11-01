<?php

class User{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function register($data){

        
        $this->db->query('INSERT INTO user(name, address, email, contact,password, role) VALUES(name=:name, address:address, email:email, contact:contact,password:password, role:role) ');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':conatact', $data['contact']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function login($email, $password){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        return $row;

        //$hashed_password = $row->password;
        // if (password_verify($password, $hashed_password)) {
        //     return $row;

        // } else {
        //     return false;
        // }

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
}


?>