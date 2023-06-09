<?php
namespace IMooc\Database;
interface Database{
    function connect($host,$user,$pass,$dbname);
    function query($sql);
    function close();
}
