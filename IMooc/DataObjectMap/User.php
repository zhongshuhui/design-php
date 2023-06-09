<?php
namespace IMooc\DataObjectMap;

use IMooc\Database\Mysqli;

class User{
    public $id;
    public $name;
    public $mobile;
    public $reg_time;
    protected $db;
    function __construct($id){
        $this->db = new Mysqli();
        $this->db->connect('192.168.11.31','root','root','design');
        $res = $this->db->query("SELECT * FROM user WHERE id=$id");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->reg_time = $data['reg_time'];
    }

    function __destruct(){
        $this->db->query("UPDATE user 
            SET name='{$this->name}',mobile='{$this->mobile}',reg_time='{$this->reg_time}' WHERE id='{$this->id}'");
    }
}
