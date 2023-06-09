<?php
namespace IMooc\Proxy;
interface IUserProxy{
    function getUserName($id);
    function setUserName($id,$name);
}
