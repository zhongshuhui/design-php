<?php
namespace IMooc\Database;
class Mysqli implements Database{

    protected $conn;
    function connect($host, $user, $pass, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host,$user,$pass,$dbname);
        $this->conn =  $conn;
        return $this->conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn,$sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}
