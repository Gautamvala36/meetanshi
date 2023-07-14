<?php

class database
{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "rto";
    private $mysqli = "";
    private $result = array();
    private $conn = false;

    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->server, $this->username, $this->password, $this->dbname);
            $this->conn = true;
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }

    // Function to insert into the database
    public function insert($table, $params = array())
    {
        if ($this->tableExists($table)) {

            $table_columns = implode(',', array_keys($params));
            $table_value = implode("','", $params);
            $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_value')";

            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->insert_id);
                return true; // The data has been inserted
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // Function to update row the database
    public function update($table, $params = array(), $where = null)
    {
        if ($this->tableExists($table)) {

            $args = array();
            foreach ($params as $key => $value) {
                $args[] = "$key = '$value'";
            }
            $sql = "UPDATE $table SET " . implode(',', $args);
            if ($where != null) {
                $sql .= "WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // Function to delete table or row(s) database
    public function delete($table, $where = null)
    {
        if ($this->tableExists($table)) {
            $sql = "DELETE FROM $table";
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // Function to select from the database
    public function select($table, $row = "*", $join = null, $where = null, $order = null, $limt = null)
    {
        if ($this->tableExists($table)) {
            $sql = "SELECT $row FROM $table";
            if ($join != null) {
                $sql .= "JOIN $join";
            }
            if ($where != null) {
                $sql .= "WHERE $where";
            }
            if ($order != null) {
                $sql .= "ORDER BY $order";
            }
            if ($limt != null) {
                $sql .= "LIMT 0, $limt";
            }
            echo $sql;

            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }
    public function sql($sql)
    {
        $query = $this->mysqli->query($sql);
        if ($query) {
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }

    // private function to check if table exists for use with queries
    private function tableExists($table)
    {
        $sql = "SHOW TABLES FROM $this->dbname LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true; // The table exists
            } else {
                array_push($this->result, $table . "does not exist in this database.");
                return false; //the table does not exist
            }
        }
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    // close connection
    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }


}


?>