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
        $this->db->query('SELECT *, q.id AS eqid, g.id AS gid FROM event_quote q, general_requests g Where sid=:id AND q.rid = g.id');

        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }
    public function getEvent($id)
    {

       
        $this->db->query('SELECT * FROM general_requests  Where id=:id ');

        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getCustomerById($id)
    {

      
        $this->db->query('SELECT * FROM user Where id = :id');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
       
        return $result;
    }

    public function getSupplier($type)
    {

        if($type == 'reception'){
            $type = 'Reception Hall';
        }
        if($type == 'cake'){
            $type = 'Cake Service';
        }
        if($type == 'catering'){
            $type = 'Catering Service';
        }
        $this->db->query('SELECT * FROM user Where stype=:stype ');

        $this->db->bind(':stype', $type);
        $result = $this->db->resultSet();
       
        return $result;
    }

    public function getOnePlannerQuote($id)
    {   
        $this->db->query('SELECT * , q.id AS eqid, g.id AS gid FROM event_quote q, general_requests g Where q.id=:id AND q.rid = g.id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneReceptionQuote($id){
        $this->db->query('SELECT * FROM reception Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOnePhotographyQuote($id){
        $this->db->query('SELECT * FROM photography Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneCakeQuote($id){
        $this->db->query('SELECT * FROM cake Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneCateringQuote($id){
        $this->db->query('SELECT * FROM catering Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneMusicQuote($id){
        $this->db->query('SELECT * FROM music Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    
    public function getOneDancingQuote($id){
        $this->db->query('SELECT * FROM dancing Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneDecorationQuote($id){
        $this->db->query('SELECT * FROM decoration Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }
    public function getOneDjQuote($id){
        $this->db->query('SELECT * FROM dj Where id=:id ' );
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

}
