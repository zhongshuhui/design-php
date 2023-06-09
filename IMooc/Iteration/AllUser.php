<?php

namespace IMooc\Iteration;

use IMooc\Database\Mysqli;
use IMooc\Factory;

class AllUser implements \Iterator
{

    protected $index;
    protected $ids;

    function __construct()
    {
        $db = new Mysqli();
        $db->connect('192.168.11.31', 'root', 'root', 'design');
        $result = $db->query('SELECT id FROM user');
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function current()
    {
        $id = $this->ids[$this->index]['id'];
        return \IMooc\DataObjectMap\Factory::getUser($id);
    }

    public function next()
    {
        $this->index += 1;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return $this->index < count($this->ids);
    }

    //最先执行
    public function rewind()
    {
        $this->index = 0;
    }
}
