<?php
namespace IMooc\DataObjectMap;
use IMooc\Register;

class Factory{

    static function getUser($id){
        $key = 'user_'.$id;
        $user = Register::get($key);
        if(!$user){
            $user =   new User($id);
            Register::set($key,$user);
        }
        return $user;
    }
}
