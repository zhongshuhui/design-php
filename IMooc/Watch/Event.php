<?php
namespace IMooc\Watch;
class Event extends EventGenerator {
    function trigger(){

        echo "EVENT<br/>";

        $this->notify();
    }

}
