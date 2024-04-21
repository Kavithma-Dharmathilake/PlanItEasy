<?php

class EventPlanner
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

  
    public function getEventQuote()
    {

        $id = $_SESSION['user_id'];
        $this->db->query('SELECT * FROM event_quote Where sid=:id');

        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

}
