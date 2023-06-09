<?php

namespace IMooc\Watch;
abstract class EventGenerator
{

    private $observers;
    private $params;

    function addObserver(Observer $observer, $param)
    {
        $key = md5($param . rand(10000000, 9999999));
        $this->observers[$key] = $observer;
        $this->params[$key] = $param;
    }

    function notify()
    {
        foreach ($this->observers as $key => $observer) {
            $observer->update($this->params[$key]);
        }
    }
}
