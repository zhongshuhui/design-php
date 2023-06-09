<?php
namespace IMooc;
class Object{

    static function test(){
        echo __CLASS__.__FUNCTION__;
    }

    protected $array = [];
    function __set($key,$value){
        $this->array[$key] = $value;
       print_r($this->array);
    }

    function __get($key){
        return $this->array[$key];
    }

    function __call($func,$param){

    }

    function __callStatic($func, $param){
        return $func;
    }

    function __toString(){
        return __CLASS__;
    }

    function __invoke($param){
        var_dump($param);
    }

}
