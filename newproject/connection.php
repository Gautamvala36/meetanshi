<?php

class database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test";
    private $conn = "";

    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die('Could not connect:');
        }

    }


    //    insert data
    public function insertdata($name, $email, $number)
    {
        try {
            $query ="INSERT INTO newform VALUES(NULL ,'$name', '$email', '$number')";
            return $this->conn->query($query);
        } catch (Exception $e) {
            header('location:index.php?error=Email id already available');
        }
    }


    //    select data
    public
        function selectdata(
        $page,
        $limit
    ) {
        $offset = 1;
        if ($page && $limit) {
            $offset = ($page - 1) * $limit;
        }
        $query = "SELECT * FROM newform LIMIT $offset,$limit";
        return $this->conn->query($query)->fetch_all();
    }

    public function getselectRecords($limit)
    {
        $query = "SELECT * FROM newform";
        $recods = sizeof($this->conn->query($query)->fetch_all());
        if ($limit) {
            return ceil($recods / $limit);
        }
        return 1;
    }


    //    select getid data
    public
        function getId(
        $id
    ) {
        $query = "SELECT * FROM newform WHERE id = $id";
        return $this->conn->query($query)->fetch_all();
    }

    //    update data
    public
        function update(
        $id,
        $name,
        $email,
        $number
    ) {
        $query = "UPDATE newform SET name = '$name', email = '$email', number = '$number' WHERE id = $id";
        return $this->conn->query($query);
    }

    //    delete data
    public
        function deletedata(
        $id
    ) {
        $query = "DELETE FROM newform WHERE id = $id";
        return $this->conn->query($query);
    }

}

?>