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
    public function selectdata($table)
    {
        $query = "SELECT * FROM $table";
        $data = $this->conn->query($query);
        return $data;
    }

    // pagination registration 

    public function pagination_selectdata($table,$offset,$limit_per_page)
    {
        $query = "SELECT * FROM $table LIMIT $offset,$limit_per_page";
        $data = $this->conn->query($query);
        return $data;
    }

    public function count_records($table = 'user') {
        $sql = "SELECT COUNT(*) AS total FROM $table";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return (int) $row['total']; // Convert the total count to an integer
    }



    //    select to user table data Registerd table fulldata
    public function getdata($id)
    {
        $query = "SELECT * FROM user WHERE id = $id";
        return $this->conn->query($query)->fetch_assoc();
    }

    // select in Contact Us data show
    public function contactget()
    {
        $query = "SELECT *  FROM contactus";
        $data = $this->conn->query($query);
        return $data;
    }

    // select in paymetn and exam data show
    public function paymetexam()
    {
        $query = "SELECT p.*,u.status AS examstatus,u.examdate FROM payment p INNER JOIN userexam u WHERE p.application_no = u.application_no";
        $data = $this->conn->query($query);
        return $data;
    }


    // select in Request data show
    public function requestget()
    {
        $query = "SELECT user.application_no, ur.id,ur.email,ur.request,ur.date FROM user JOIN user_request ur WHERE user.id = ur.id";
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

    // contactus detele data in admin panel
    public function deleteuser($id)
    {
        $query = "DELETE FROM user WHERE id = $id";
        return $this->conn->query($query);
    }


    // dashboard Data show 
    public function countdata($count, $table)
    {
        $query = "SELECT COUNT($count) FROM $table";
        return $this->conn->query($query);
    }

    public function count_data($count, $table, $where)
    {
        $query = "SELECT COUNT($count) FROM $table WHERE status = '$where'";
        return $this->conn->query($query);
    }

    // request table in count user request
    public function count_req($id)
    {
        $query = "SELECT COUNT(a.application_no)as count FROM user_request a inner join user b on a.application_no = b.id where b.id=".$id;
        $result = $this->conn->query($query);
        $requestsByUser = array();
        while ($row = $result->fetch_assoc()) {
            $userId = $row['application_no'];
            $requestCount = $row['count'];
            $requestsByUser[$userId] = $requestCount;
        }
        return $requestsByUser;
    }

    // admin registration 

    public function reg_insert($application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status)
    {
        $query = "INSERT INTO user VALUES(NULL,'$application_no','$filename','$fullname','$fathername','$gender','$dob','$bloodgroup','$p_number','$email','$password','$aadhar_number','$license_type','$address1','$address2','$state','$district','$city','$pincode','$status',CURRENT_TIMESTAMP)";
        return $this->conn->query($query);
    }

    // Updata in user edit form
    public function user_updata($id, $application_no, $filename, $fullname, $fathername, $gender, $dob, $bloodgroup, $p_number, $email, $password, $aadhar_number, $license_type, $address1, $address2, $state, $district, $city, $pincode, $status)
    {
        $query = "UPDATE user SET application_no = '$application_no', photo = '$filename', fullname = '$fullname' , fathername = '$fathername', gender = '$gender' , dob = '$dob',bloodgroup = '$bloodgroup',mobilenumber = '$p_number',email = '$email', password = '$password',aadharnumber = '$aadhar_number', license_type = '$license_type' , address1 = '$address1' ,  address2 = '$address2',state = '$state',district = '$district',city = '$city', pincode = '$pincode', status = '$status' WHERE id = $id";
        // var_dump($query);
        return $this->conn->query($query);
        // return $this->conn->error;

    }

    // new request insert 
    public function request_send($application_no, $email, $request)
    {
        // try {
        $query = "INSERT INTO user_request VALUES(NULL,'$application_no','$email','$request',CURRENT_TIMESTAMP)";
        var_dump($query);
        return $this->conn->query($query);
        // } catch (Exception $e) {
        // echo $e;
        // }
    }

    // paymnet user insert and check exam 
    public function payment_insert($application_no,$email,$payment,$number,$fees,$status,$date)
    {
        $query = "INSERT INTO payment VALUES(NULL,'$application_no','$email','$payment','$number','$fees','$status','$date',CURRENT_TIMESTAMP)";
        var_dump($query);
        return $this->conn->query($query);
    }

    public function exam_check($application_no,$email)
    {
        $query = "SELECT * FROM payment WHERE application_no = '$application_no' AND email = '$email'";
        return $this->conn->query($query);

    }

    public function selec_exam($table)
    {
        $query = "SELECT * FROM payment ORDER BY application_no DESC LIMIT 1";
        $data = $this->conn->query($query);
        $row = $data->fetch_assoc();
        return $row;
    }

    // insert userexam in status
    public function user_exam_status($application_no,$email,$res)
    {
        $query = "INSERT INTO userexam VALUES(NULL,'$application_no','$email','$res',CURRENT_TIMESTAMP)";
        // var_dump($query);
        return $this->conn->query($query);
    }

}
