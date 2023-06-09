<?php
namespace IMooc;
class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        return $db;
    }
}
