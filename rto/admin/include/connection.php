<?php

class connection
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "rto";
    private $conn = "";

    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die('Could not connect:');
        }
    }

    // check login in email and password
    public function loginCheck($email, $pass)
    {
        $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
        $result = $this->conn->query($query);
        return $result;
    }


    //    select to user table data Registerd table
    public function selectdata($offset,$limt)
    {
        $query = "SELECT * FROM user ORDER BY id DESC  LIMIT {$offset},{$limt}";
        $data = $this->conn->query($query);
        return $data;
        //        return json_encode($data);
    }

    //    select to user table data Registerd table fulldata
    public function getdata($id)
    {
        $query = "SELECT * FROM user WHERE id = $id";
        return $this->conn->query($query)->fetch_assoc();
    }
 
    // select in Contact Us data show
    public function contactget($offset,$limt)
    {
        $query = "SELECT *  FROM contactus  LIMIT {$offset},{$limt}";
        $data = $this->conn->query($query);
        return $data;
    }

    // select in paymetn and exam data show
    public function paymetexam($offset,$limt)
    {
        $query = "SELECT p.*,u.status AS examstatus,u.examdate FROM payment p INNER JOIN userexam u WHERE p.id = u.id  LIMIT {$offset},{$limt}";
        $data = $this->conn->query($query);
        return $data;
    }

    
    // select in Request data show
    public function requestget($offset,$limt)
    {
        $query = "SELECT user.application_no, ur.id,ur.email,ur.request,ur.date FROM user JOIN user_request ur WHERE user.id = ur.id LIMIT $offset,$limt";
        $data = $this->conn->query($query);
        return $data;
    }


    // pagination in Registerd table
    public function pagination()
    {
        $query = "SELECT * FROM user";
        $data = $this->conn->query($query);
        return $data;
    }

    
    // Accept and Reject

    public function acceptuser($id)
    {
        $query = "UPDATE user SET status = 'Accept' WHERE id = $id";
        return $this->conn->query($query);
    }
    public function rejectuser($id)
    {
        $query = "UPDATE user SET status = 'Reject' WHERE id = $id";
        return $this->conn->query($query);
    }

    // contactus detele data in admin panel
    public function deletedata($id)
    {
        $query = "DELETE FROM contactus WHERE id = $id";
        return $this->conn->query($query);
    }

    // dashboard Data show 
    public function countdata($count,$table)
    {   
        $query = "SELECT COUNT($count) FROM $table";
        return $this->conn->query($query);
    }

    public function count_data($count,$table,$where)
    {   
        $query = "SELECT COUNT($count) FROM $table WHERE status = '$where'";
        return $this->conn->query($query);
    }



}

?>