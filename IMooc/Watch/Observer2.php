<?php

namespace IMooc\Watch;
class Observer2 implements Observer
{

    function update($event_info)
    {
        echo '我是观察者2';
        echo "<br/>";
        print_r($event_info);
        echo "<br/>";
    }
}
