<?php
namespace IMooc\Database;
class Mysql implements Database{

    protected $conn;
    function connect($host, $user, $pass, $dbname)
    {
        // TODO: Implement connect() method.
       $conn = mysql_connect($host,$user,$pass);
        mysql_select_db($dbname,$conn);
        $this->conn =  $conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return mysql_query($sql,$this->conn);
    }

    function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}
