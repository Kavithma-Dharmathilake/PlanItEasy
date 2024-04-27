<?php

class Supplier
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    // public function loadUsername(){
    //     $id = $_SESSION['user_id'];
    //     $this->db->query('SELECT name FROM user WHERE id = :id');
    //     $this->db->bind(':id', $id);
    //     $result = $this->db->single();
    //     return $result;
    // }


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

    public function getPortfolio($id)
    {

        $this->db->query('SELECT * FROM portfolios WHERE sid = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function updatePortfolio($data)
    {
        $this->db->query('UPDATE portfolios SET 
        bio=:bio, description =:description, caption=:caption,
        img1=:img1,img2=:img2, img3=:img3, img4=:img4, img5=:img5, img6=:img6, img7=:img7, img8=:img8, img9=:img9, img10=:img10,
        doc=:doc
        WHERE sid=:id');
        $this->db->bind(':id', $_SESSION['user_id']);
        $this->db->bind(':bio', $data['bio']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':caption', $data['caption']);
        $this->db->bind(':doc',$data['document']);

      
        for ($i = 0; $i < 10; $i++) {
            $img = $data['images'][$i];
            $this->db->bind(":img" . ($i+1), $img);
        }

        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

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
        $sid = $_SESSION['user_id'];
        $this->db->query('SELECT * FROM quoate WHERE sid = :sid');
        $this->db->bind(':sid', $sid);
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

    public function getCalander()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM calander where supplier = :id');
        $this->db->bind(':id', $id );
        $result = $this->db->fetchAllAssoc();
        return $result;
    }

    public function getHoliday()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM calander where supplier = :id AND status != :status');
        $this->db->bind(':id', $id );
        $this->db->bind(':status', "Available" );
        $result = $this->db->fetchAllAssoc();
        return $result;
    }

    public function chekDate($date)
    {

        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM calander where supplier = :id AND date = :date');
        $this->db->bind(':date', $date);
        $this->db->bind(':id', $id );
        $result = $this->db->resultSet();
        return $result;
    }

    
    public function sendMessage($data)
    {

        $sid= $_SESSION['user_id'];
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

    public function getMessages($qid)
    {

        $this->db->query('SELECT * FROM message WHERE qid = :qid ORDER BY date ASC, time ASC');
        $this->db->bind(':qid', $qid);
        $result = $this->db->resultSet();

        return $result;
     
    }


    public function getAllPackages()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM packages where supplier = :id');
        $this->db->bind(':id', $id );
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
        $this->db->query('UPDATE quoate SET r_price=:price, status=:status, s_remark=:remark, received_date=:date, q_status=:qstatus WHERE id=:id');
        $qstatus = "Accepted";
        $status = "Request Accepted";
        date_default_timezone_set('UTC');
        $date = date('Y-m-d');

        //bind values
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':status', $status);
        $this->db->bind(':qstatus', $qstatus);
        $this->db->bind(':date', $date);
        $this->db->bind(':id', $data['id']);
        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function declineQuote($data)
    {
        $this->db->query('UPDATE quoate SET status=:status, s_remark=:remark, received_date=:date, q_status=:qstatus WHERE id=:id');
        $qstatus = "Declined";
        $status = "Request Declined";
        date_default_timezone_set('UTC');
        $date = date('Y-m-d');

        //bind values
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':status', $status);
        $this->db->bind(':qstatus', $qstatus);
        $this->db->bind(':date', $date);
        $this->db->bind(':id', $data['id']);
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

    public function addAvailability($available)
    {
        $this->db->query('INSERT INTO calander(supplier,title, date, status) VALUES(:supplier, :title, :date, "Not Available")');
        $this->db->bind(':supplier', $_SESSION['user_id']);
        $this->db->bind(':title', $available['event']);
        $this->db->bind(':date', $available['date']); 

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

    public function countAllProducts(){
        $this->db->query('SELECT COUNT(*) AS Count FROM packages');
        $result = $this->db->single();
        return $result;
    }

    public function countQuotations(){
        $this->db->query('SELECT COUNT(*) AS Count FROM quoate');
        $result = $this->db->single();
        return $result;
    }

    public function getSentReq(){
        
        $this->db->query('SELECT id, package, eid, sid, uid, stime FROM quoate');
        $result = $this->db->resultSet();
        return $result;
        
        // $sid = $_SESSION['user_id'];
        // $this->db->query('SELECT * FROM quoate WHERE sid = :sid');
        // $this->db->bind(':sid', $sid);
        // $result = $this->db->resultSet();
        // return $result;
    }

    public function countQuotationsPerMonth()
    {
        $this->db->query('SELECT 
    MONTH(received_date) AS month,
    COUNT(*) AS month_count
FROM 
    quoate
GROUP BY 
    MONTH(received_date)
ORDER BY 
    month
');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getAcceptedQuotations()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM quoate WHERE sid = :id AND q_status = :status');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', 'Accepted');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getPendingQuotations()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM quoate WHERE sid = :id AND q_status = :status');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', 'Pending');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getDeclinedQuotations()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM quoate WHERE sid = :id AND q_status = :status');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', 'Declined');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getPaidQuotations()
    {
        $id= $_SESSION['user_id'];
        $this->db->query('SELECT * FROM quoate WHERE sid = :id AND q_status = :status');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', 'Payment Complete');
        $result = $this->db->resultSet();
        return $result;
    }
}
