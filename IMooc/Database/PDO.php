<?php
namespace IMooc\Database;
class PDO implements Database{

    protected $conn;
    function connect($host, $user, $pass, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
        $this->conn =  $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return $this->conn->query($sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}
