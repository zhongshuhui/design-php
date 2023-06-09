<?php

namespace IMooc\Decorator;
class SizeDecorator implements DrawDecorator
{

    protected $size;

    function __construct($size)
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        echo "<div style='font-size: : {$this->size}'>";
    }

    function afterDraw()
    {
        echo "</div>";
    }
}
