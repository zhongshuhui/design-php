<?php
namespace IMooc;



use IMooc\Database\Mysqli;

class Database{

    protected $db;
    public function where(){
        return $this;
    }

    public function order(){
        return $this;
    }

    public function limit(){
        return $this;
    }

    private function __construct()
    {
        $db = new Mysqli();
        $this->db = $db->connect('192.168.11.31','root','root','design');
    }

    //防止对象被克隆
    private function __clone(){

    }
    static function getInstance(){

        if(self::$db){
            return self::$db;
        }else{
             self::$db = new self();
        }
        return self::$db;
    }
}
