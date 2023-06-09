<?php


namespace IMooc\Strategy;
class Page{
    protected $strategy;
    function index(){
        $this->strategy->showAd();
        $this->strategy->showCategory();
    }
    function setStrategy(User $user){
        $this->strategy = $user;
    }
}
