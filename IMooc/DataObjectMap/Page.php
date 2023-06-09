<?php
namespace IMooc\DataObjectMap;

class Page{
    function index(){

      //  $user = new User(1);
        $user = Factory::getUser(1);
        $user->name = 'ABC';
        $this->test();
    }

    function test(){

        //  $user = new User(1);
        $user = Factory::getUser(1);
        $user->name = 'ABCD';
    }
}
