<?php

class Customer
{

    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    public function  newevent($data)
    {

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
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  RequestPhotoQuote($data)
    {

        $sent = "Request Sent";
        $date = date("Y-m-d");

        $this->db->query('INSERT INTO quoate(package,eid,sid,uid,etime,stime,remarks,status,additional_services,send_date,stype)
        VALUES(:package,:eid,:sid,:uid,:etime,:stime,:remarks,:status,:additional_services,:send_date,:stype) ');
        $this->db->bind(':package', $data['package']);
        $this->db->bind(':eid', $data['rid']);
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':etime', $data['stime']);
        $this->db->bind(':stime', $data['etime']);
        $this->db->bind(':remarks', $data['remark']);
        $this->db->bind(':stype', $data['stype']);
        $this->db->bind(':status', $sent);
        $this->db->bind(':additional_services', $data['services']);
        $this->db->bind(':send_date', $date);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function  RequestReceptQuote($data)
    {

        $sent = "Request Sent";
        $date = date("Y-m-d");

        $this->db->query('INSERT INTO quoate(package,eid,sid,uid,etime,stime,remarks,status,additional_services,send_date,stype) 
        VALUES(:package,:eid,:sid,:uid,:etime,:stime,:remarks,:status,:additional_services,:send_date,:stype) ');
        $this->db->bind(':package', $data['package']);
        $this->db->bind(':eid', $data['rid']);
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':etime', $data['stime']);
        $this->db->bind(':stime', $data['etime']);
        $this->db->bind(':remarks', $data['remark']);
        $this->db->bind(':status', $sent);
        $this->db->bind(':additional_services', $sent);
        $this->db->bind(':send_date', $date);
        $this->db->bind(':stype', $data['stype']);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function  PlannerReception($data)
    {

        $this->db->query('INSERT INTO reception (type,remark,start,end) VALUES(:type,:remark,:start,:end) ');
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  PlannerCatering($data)
    {

        $this->db->query('INSERT INTO catering(time,services,remark,start,end,price) VALUES(:time,:services,:remark,:start,:end,:price) ');
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':services', $data['services']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);
        $this->db->bind(':price', $data['price']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }


    public function  PlannerPhotography($data)
    {

        $this->db->query('INSERT INTO photography(coverage,services,remark,start,end) VALUES(:coverage,:services,:remark,:start,:end) ');
        $this->db->bind(':coverage', $data['coverage']);
        $this->db->bind(':services', $data['services']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  PlannerDecoration($data)
    {

        $this->db->query('INSERT INTO decoration(flowers,services,remark) VALUES(:flowers,:services,:remark) ');
        $this->db->bind(':services', $data['services']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':flowers', $data['flowers']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }


    public function  PlannerCake($data)
    {

        $this->db->query('INSERT INTO cake(remark) VALUES(:remark) ');
        $this->db->bind(':remark', $data['remark']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  PlannerDance($data)
    {

        $this->db->query('INSERT INTO dancing(remark,start,end) VALUES(:remark,:start,:end) ');
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  PlannerMusic($data)
    {

        $this->db->query('INSERT INTO music(remark,start,end) VALUES(:remark,:start,:end) ');
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  PlannerDJ($data)
    {

        $this->db->query('INSERT INTO dj(coverage,services,remark,start,end) VALUES(:coverage,:services,:remark,:start,:end) ');
        $this->db->bind(':coverage', $data['coverage']);
        $this->db->bind(':services', $data['services']);
        $this->db->bind(':remark', $data['remark']);
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  RequestEventQuote($data)
    {

        $sent = "Request Sent";
        $date = date("Y-m-d");
        $price = 10000.00;

        $this->db->query('INSERT INTO event_quote(sid, rid, uid, package, c_remark, p_price, s_date,status, reception, catering, photography, decoration, cake, dancing, music, dj) 
        VALUES (:sid,:rid,:uid,:package,:c_remark, :p_price,:s_date,:status,:reception,:catering,:photography,:decoration,:cake,:dancing,:music,:dj)');
        $this->db->bind(':package', $data['package']);
        $this->db->bind(':rid', $data['rid']);
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':c_remark', $data['plannerremark']);
        $this->db->bind(':p_price', $price);
        $this->db->bind(':reception', $data['reception']);
        $this->db->bind(':photography', $data['photography']);
        $this->db->bind(':decoration', $data['decoration']);
        $this->db->bind(':cake', $data['cake']);
        $this->db->bind(':dancing', $data['dance']);
        $this->db->bind(':music', $data['music']);
        $this->db->bind(':dj', $data['dj']);
        $this->db->bind(':catering', $data['catering']);
        $this->db->bind(':status', $sent);
        $this->db->bind(':s_date', $date);



        //Execute the query
        if ($this->db->execute()) {
            $sent = "none";
            $date = date("Y-m-d");
            $stype = 'eventplanner';

            $this->db->query('INSERT INTO quoate(package,eid,sid,uid,remarks,status,send_date,stype) 
            VALUES(:package,:eid,:sid,:uid,:remarks,:status,:send_date,:stype) ');
            $this->db->bind(':package', $data['package']);
            $this->db->bind(':eid', $data['rid']);
            $this->db->bind(':sid', $data['sid']);
            $this->db->bind(':uid', $data['uid']);
            $this->db->bind(':remarks', $data['plannerremark']);
            $this->db->bind(':status', $sent);
            $this->db->bind(':stype', $stype);
            $this->db->bind(':send_date', $date);

            $this->db->execute();
            return true;
        } else {
            return false;
        }
    }


    public function  RequestCaterQuote($data)
    {

        $sent = "Request Sent";
        $date = date("Y-m-d");

        $this->db->query('INSERT INTO quoate(package,eid,sid,uid,etime,stime,remarks,status,additional_services,send_date,time,stype) 
        VALUES(:package,:eid,:sid,:uid,:etime,:stime,:remarks,:status,:additional_services,:send_date,:time,:stype) ');
        $this->db->bind(':package', $data['package']);
        $this->db->bind(':eid', $data['rid']);
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':etime', $data['stime']);
        $this->db->bind(':stime', $data['etime']);
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':remarks', $data['remark']);
        $this->db->bind(':stype', $data['stype']);
        $this->db->bind(':status', $sent);
        $this->db->bind(':additional_services',  $data['services']);
        $this->db->bind(':send_date', $date);


        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function  RequestDecoQuote($data)
    {

        $sent = "Request Sent";
        $date = date("Y-m-d");

        $this->db->query('INSERT INTO quoate(package,eid,sid,uid,etime,stime,remarks,status,additional_services,send_date,stype,flowers) 
        VALUES(:package,:eid,:sid,:uid,:etime,:stime,:remarks,:status,:additional_services,:send_date,:stype,:flowers) ');
        $this->db->bind(':package', $data['package']);
        $this->db->bind(':eid', $data['rid']);
        $this->db->bind(':sid', $data['sid']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':flowers', $data['flowers']);
        $this->db->bind(':etime', $data['stime']);
        $this->db->bind(':stime', $data['etime']);
        $this->db->bind(':remarks', $data['remark']);
        $this->db->bind(':stype', $data['stype']);
        $this->db->bind(':status', $sent);
        $this->db->bind(':additional_services',  $data['services']);
        $this->db->bind(':send_date', $date);


        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }

    public function getAllEvents($id)
    {

        $this->db->query('SELECT * FROM general_requests Where idcustomer =:id');

        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getEventQuote()
    {

        $uid = $_SESSION['user_id'];
        $this->db->query('SELECT * 
        FROM event_quote q, general_requests g
        WHERE sid=:id AND q.rid = g.id');
        //bind values
        $this->db->bind(':id', $uid);
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

    public function deleteUser($id)
    {

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

    public function getAllQuote($id)
    {

        $uid = $_SESSION['user_id'];
        $this->db->query('SELECT * 
        FROM quoate q, user u
        WHERE q.eid=:id AND q.sid = u.id AND q.uid = :uid');
        //bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':uid', $uid);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getAcceptedQuote($id)
    {

        $uid = $_SESSION['user_id'];
        $status = 'Accepted';
        $eventplanner = 'eventplanner';
        $this->db->query('SELECT q.id, q.r_price, q.q_status, q.stype, u.bname,q.eid 
        FROM quoate q, user u
        WHERE q.eid=:id AND q.sid = u.id AND q.uid = :uid AND q.q_status =:status AND q.stype != :except1');

        //bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':uid', $uid);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getAccepteServices($id)
    {

        $uid = $_SESSION['user_id'];
        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT DISTINCT q.stype 
                         FROM quoate q 
                         WHERE q.eid = :id 
                         AND q.uid = :uid 
                         AND q.q_status = :status 
                         AND q.stype != :except1
                         ORDER BY q.stype ASC');

        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':uid', $uid);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);

        $result = $this->db->resultSet();
        return $result;
    }

    public function getLowestPricedQuotation($data)
    {


        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT q.r_price AS price, q.id AS qid, q.sid as supplier
        FROM planiteasy.quoate q 
        WHERE q.eid =:eid AND q.stype != :except1 AND q.stype = :stype AND q_status =:status
        GROUP BY q.stype
        ORDER BY q.stype ASC');

        //bind values
        $this->db->bind(':eid', $data['eid']);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $this->db->bind(':stype', $data['service']);

        $result = $this->db->resultSet();
        return $result;
    }


    public function getQuoteByService($data)
    {


        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT *
        FROM planiteasy.quoate q 
        JOIN  planiteasy.user us ON q.sid = us.id
        WHERE q.eid =:eid AND q.stype != :except1 AND q.stype = :stype AND q_status =:status');

        //bind values
        $this->db->bind(':eid', $data['eid']);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $this->db->bind(':stype', $data['service']);

        $result = $this->db->resultSet();
        return $result;
    }

    public function getSupplier($id)
    {


        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT *
        FROM planiteasy.user u 
        WHERE id =:id');

        //bind values
        $this->db->bind(':id', $id);

        $result = $this->db->single();
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
            WHERE q_status = :status AND stype != :except1 AND eid = :event_id
            GROUP BY stype
        ) AS min_prices
        ON q.stype = min_prices.stype AND q.r_price = min_prices.min_quotation');

        //bind values
        $this->db->bind(':event_id', $id);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $result = $this->db->resultSet();
        return $result;
    }

    public function ratingbudget($id)
    {

        $uid = $_SESSION['user_id'];
        $status = 'Accepted';
        $eventplanner = 'eventplanner';

        $this->db->query('SELECT u.id AS user, u.bname, q.stype, q.id, q.r_price
        FROM planiteasy.quoate q 
        JOIN planiteasy.user u ON q.sid = u.id
        JOIN (
            SELECT stype, MIN(r_price) AS min_quotation
            FROM planiteasy.quoate 
            WHERE q_status = :status AND stype != :except1 AND eid = :event_id
            GROUP BY stype
        ) AS min_prices
        ON q.stype = min_prices.stype AND q.r_price = min_prices.min_quotation');

        //bind values
        $this->db->bind(':event_id', $id);
        $this->db->bind(':status', $status);
        $this->db->bind(':except1', $eventplanner);
        $result = $this->db->resultSet();
        return $result;
    }

    public function deletBudgetItem($id)
    {
        $this->db->query('DELETE FROM budget_item WHERE id=:id');

        //bind values
        $this->db->bind(':id', $id);


        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }



    public function createbudget($id)
    {


        $this->db->query('INSERT INTO budget(rid) VALUES(:rid)');
        $this->db->bind(':rid', $id);
        $this->db->execute();
        $id = $this->db->lastInsertedId();
        return $id;
    }

    public function findSupplierName($id)
    {


        $this->db->query('SELECT bname FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();
        return $row;
    }

    public function insertBudgetItem($data)
    {
        $this->db->query('SELECT  * FROM budget_item WHERE qid = :qid');
        $this->db->bind(':qid', $data['qid']);
        $result = $this->db->single();

        if ($result != null) {
            return -1;
        } else {

            $this->db->query('INSERT INTO budget_item(bid,qid,bname,r_price,stype) VALUES(:bid,:qid,:bname,:price,:stype)');

            $this->db->bind(':bid', $data['bid']);
            $this->db->bind(':qid', $data['qid']);
            $this->db->bind(':bname', $data['bname']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':stype', $data['stype']);
            $this->db->execute();
            $id = $this->db->lastInsertedId();
            return $id;
        }
    }

    public function addBudgetItem($bid, $qid)
    {
        $this->db->query('SELECT COUNT(*) AS count FROM budget_item WHERE qid = :qid');
        $this->db->bind(':qid', $qid);
        $result = $this->db->single();

        if ($result['count'] > 0) {
            return false;
        } else {

            $this->db->query('INSERT INTO budget_item(bid,qid,bname,r_price,stype) VALUES(:bid,:qid,:bname,:price,:stype)');

            $this->db->bind(':bid', $bid);
            $this->db->bind(':qid', $qid);
            $this->db->bind(':bname', $data->bname);
            $this->db->bind(':price', $data->r_price);
            $this->db->bind(':stype', $data->stype);
            $this->db->execute();

            return true;
        }
    }

    public function getBudgetItems($id)
    {

        $this->db->query('SELECT * 
        FROM budget_item
        WHERE bid=:id');

        //bind values
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getAllBudget($id)
    {

        $this->db->query('SELECT * 
        FROM budget
        WHERE rid=:id');

        //bind values
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        return $result;
    }


    public function getOneQuote($id)
    {
        $this->db->query('SELECT * FROM quoate q, user u WHERE q.id = :id AND q.sid = u.id');
        $this->db->bind(':id', $id);
        $data = $this->db->single();

        return $data;
    }

    public function updateTotal($data)
    {
        $this->db->query('UPDATE budget SET price=:price WHERE id=:id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':price', $data['price']);



        //Execute the query
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function insertPayement($data)
    {

        $this->db->query('INSERT INTO payment(user, name, email, amount, bid, rid) 
        VALUES(:user, :name, :email, :amount, :bid, :rid) ');

        $this->db->bind(':user', $_SESSION['user_id']);
        $name = $data['fname'] . " " . $data['lname'];
        $this->db->bind(':name', $name);
        $this->db->bind(':amount', $data['price']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':bid', $data['bid']);
        $this->db->bind(':rid', $data['rid']);

        //Execute the query
        if ($this->db->execute()) {
            $id = $this->db->lastInsertedId();
            return $id;
        } else {
            return false;
        }
    }
}
