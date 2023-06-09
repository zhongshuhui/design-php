<?php

namespace IMooc\Watch;
class Observer1 implements Observer
{

    function update($event_info)
    {

        echo '我是观察者1';
        echo "<br/>";
        print_r($event_info);
        echo "<br/>";
    }
}
