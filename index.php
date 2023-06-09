<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register();
//echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">';
/*
 * 链式调用
 * $db = new \IMooc\Database();
$db->where()->order()->limit();*/

// $object = new \IMooc\Object();
 //__set __get 接管不存在属性的设置和取值
//$object->title = 1;
//echo $object->title;
//IMooc\Application::getInstance(__DIR__)->dispatch();

//echo $object('111');


//工厂模式
//$factory =\IMooc\Factory::createDatabase();
//单列模式
//\IMooc\Database::getInstance();
//注册树
//\IMooc\Register::get('db1');

//适配器模式
//$db = new IMooc\Database\Mysqli();
//$db->connect('127.0.0.1','root','root','test');
//$db->query('show databases');
//$db->close();

//策略模式
//$page = new \IMooc\Strategy\Page();
//$page->setStrategy(new \IMooc\Strategy\Boy());
//$page->index();

/*$user = new \IMooc\DataObjectMap\User(1);
$user->name = 'ABC';*/

//观察者模式
//$event = new \IMooc\Watch\Event();
//$event->addObserver(new \IMooc\Watch\Observer1(),[1111,222]);
//$event->addObserver(new \IMooc\Watch\Observer2(),[3333,4444]);
//$event->trigger();

//原型模式
//$canvas = new \IMooc\Canvas();
//$canvas->init();
//$canvas1 = clone $canvas;
//$canvas->rect(3,6,4,12);
//$canvas->draw();
//$canvas1->rect(3,6,4,12);
//$canvas1->draw();
//装饰器
//$canvas = new \IMooc\Canvas();
//$canvas->init();
//$canvas->addDecorator(new \IMooc\Decorator\ColorDecorator('red'));
///*$canvas->addDecorator(new \IMooc\Decorator\SizeDecorator('20px'));*/
//$canvas->rect(3,6,4,12);
//$canvas->draw();
//迭代器模式
//$users = new \IMooc\Iteration\AllUser();
//foreach ($users as $user){
//    var_dump($user);
//}
//代理模式
//$proxy = new \IMooc\Proxy\Proxy();
//$proxy->getUserName(1);
//$proxy->setUserName(1);
//自动加载配置
//$config = new \IMooc\Config(__DIR__.'/configs');
//print_r($config['controller']);exit;


echo "<div>设计模式</div>";