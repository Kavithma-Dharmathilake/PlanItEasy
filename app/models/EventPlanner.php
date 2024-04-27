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



    public function getCustomerById($id)
    {


        $this->db->query('SELECT * FROM user Where id = :id');
        $this->db->bind(':id', $id);
        $result = $this->db->single();

        return $result;
    }


    public function getRequestEvent($id)
    {
        $this->db->query('SELECT * FROM general_requests Where id = :id');
        $this->db->bind(':id', $id);
        $result = $this->db->single();

        return $result;
    }
    public function getSupplier($type)
    {

        if ($type == 'reception') {
            $type = 'Reception Hall';
        }
        if ($type == 'Cake') {
            $type = 'Cake Service';
        }
        if ($type == 'catering') {
            $type = 'Catering Service';
        }
        $this->db->query('SELECT * FROM user Where stype=:stype ');

        $this->db->bind(':stype', $type);
        $result = $this->db->resultSet();

        return $result;
    }

    public function getOnePlannerQuote($id)
    {
        $this->db->query('SELECT * , q.id AS eqid, g.id AS gid FROM event_quote q, general_requests g Where q.rid=:id AND q.rid = g.id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOnePlannerQuote2($id)
    {
        $this->db->query('SELECT * FROM event_quote  Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneReceptionQuote($id)
    {
        $this->db->query('SELECT * FROM reception Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOnePhotographyQuote($id)
    {
        $this->db->query('SELECT * FROM photography Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneCakeQuote($id)
    {
        $this->db->query('SELECT * FROM cake Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneCateringQuote($id)
    {
        $this->db->query('SELECT * FROM catering Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneMusicQuote($id)
    {
        $this->db->query('SELECT * FROM music Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }


    public function getOneDancingQuote($id)
    {
        $this->db->query('SELECT * FROM dancing Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getOneDecorationQuote($id)
    {
        $this->db->query('SELECT * FROM decoration Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }
    public function getOneDjQuote($id)
    {
        $this->db->query('SELECT * FROM dj Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM user Where id=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function getMessages($id)
    {
        $this->db->query('SELECT * FROM message Where qid=:id ');
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

    public function sendMessage($data)
    {

        $sid = $_SESSION['user_id'];
        $date = date('Y-m-d');
        $time = date('H:i:s');

        $this->db->query('INSERT INTO message(qid, sid, cuid,content,date,time,sender) VALUES(:qid, :sid, :cuid,:content,:date,:time,:sender) ');
        $this->db->bind(':qid',  $data['qid']);
        $this->db->bind(':sid', $sid);
        $this->db->bind(':cuid', $data['cuid']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':date', $date);
        $this->db->bind(':time', $time);
        $this->db->bind(':sender', $sid);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getQuotations($type, $id)
    {


        $this->db->query('SELECT *,q.id AS qid  FROM quoate q, user u Where q.stype =:stype AND q.uid=:uid AND q.eid =:eid AND u.id = q.sid');

        $this->db->bind(':stype', $type);
        $this->db->bind(':uid', $_SESSION['user_id']);
        $this->db->bind(':eid', $id);
        $result = $this->db->resultSet();

        return $result;
    }

    public function getEventQuoteId($id)
    {


        $this->db->query('SELECT *  FROM event_quote Where rid =:id');
        $this->db->bind(':id', $id);
        $result = $this->db->single();


        return $result;
    }

    public function getAllBudgets($id)
    {


        $this->db->query('SELECT * FROM planner_budget Where rid =:id');
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();

        return $result;
    }

    public function createbudget($id)
    {

        $this->db->query('INSERT INTO planner_budget(rid) VALUES(:rid) ');
        $this->db->bind(':rid',  $id);

        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function getAcceptedQuote($id)
    {

        $this->db->query('SELECT *, q.id AS qid FROM quoate q, user u Where q.eid =:id AND q.uid=:uid AND q.status=:status AND q.sid = u.id');
        $this->db->bind(':id', $id);
        $this->db->bind(':uid', $_SESSION['user_id']);
        $this->db->bind(':status', 'Request Accepted');

        $result = $this->db->resultSet();
        return $result;
    }

    public function updateTotal($data)
    {

        $this->db->query('UPDATE planner_budget SET price=:price WHERE id=:id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':price', $data['price']);

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getBudgetItems($id)
    {

        $this->db->query('SELECT * 
        FROM planner_budget_item
        WHERE bid=:id');

        //bind values
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

    public function lowestbudget($id)
    {

        $uid = $_SESSION['user_id'];
        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT q.id as qid, u.id as sid, bname, r_price, q.stype as stype
        FROM planiteasy.quoate q 
        JOIN planiteasy.user u ON q.sid = u.id
        JOIN (
            SELECT stype, MIN(r_price) AS min_quotation
            FROM planiteasy.quoate 
            WHERE q_status = :status AND stype != :except1 AND eid = :event_id AND uid=:uid
            GROUP BY stype
        ) AS min_prices
        ON q.stype = min_prices.stype AND q.r_price = min_prices.min_quotation');

        //bind values
        $this->db->bind(':event_id', $id);
        $this->db->bind(':uid', $uid);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $result = $this->db->resultSet();

        return $result;
    }



    public function emptyItems($id)
    {
        $this->db->query('DELETE FROM planner_budget_item WHERE bid=:id');

        //bind values
        $this->db->bind(':id', $id);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function insertBudgetItem($data)
    {
        $this->db->query('INSERT INTO planner_budget_item(bid,qid,bname,r_price,stype) VALUES(:bid,:qid,:bname,:price,:stype)');

        $this->db->bind(':bid', $data['bid']);
        $this->db->bind(':qid', $data['qid']);
        $this->db->bind(':bname', $data['bname']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stype', $data['stype']);
        $this->db->execute();
        $id = $this->db->lastInsertedId();
        return $id;
    }


    public function getOneQuote($id)
    {
        $this->db->query('SELECT * FROM quoate q, user u WHERE q.id = :id AND q.sid = u.id');

        $this->db->bind(':id', $id);
        $data = $this->db->single();

        return $data;
    }

    public function deletBudgetItem($id)
    {

        $this->db->query('DELETE FROM planner_budget_item WHERE id=:id');

        //bind values
        $this->db->bind(':id', $id);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getBudgetData($bid, $id)
    {

        $this->db->query('SELECT * FROM planner_budget pb, planner_budget_item pbi
         WHERE pb.id =:bid AND pb.rid =:id AND pb.id = pbi.bid ');
        $this->db->bind(':bid', $bid);
        $this->db->bind(':id', $id);
        $data = $this->db->resultSet();

        return $data;
    }

    public function getPlannerDetail()
    {

        $this->db->query('SELECT * FROM user
        WHERE id=:id ');

        $this->db->bind(':id', $_SESSION['user_id']);
        $data = $this->db->single();

        return $data;
    }
    
    public function getAllPackages()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM packages where supplier = :id');
        $this->db->bind(':id', $id );
        $result = $this->db->resultSet();
        return $result;
    }

    public function addNewPackage($data)
    {

        $date = date("Y-m-d");
        $this->db->query('INSERT INTO packages(supplier,name, price, description, services, date) VALUES(:supplier,:name, :price, :description, :services, :date)');
      
        $this->db->bind(':supplier', $_SESSION['user_id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':services', $data['services']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':date', $date);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
