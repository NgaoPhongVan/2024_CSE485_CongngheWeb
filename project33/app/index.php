<?php
require_once '../app/config/config.php';

$controller = isset($_GET['controller'])? $_GET['controller'] : 'Department';
$action = isset($_GET['action'])? $_GET['action'] : 'index';

echo $action;

//viet hoa chu cai dau cua $controller
$controller = ucfirst($controller);
//thuc hien noi chuoi $controller có thể là departmentControll , Usercontroller
$controller = $controller.'Controller';
$part = 'controllers/'.$controller.'.php';

include $part;

$mycontroller = new $controller();
$mycontroller->$action();



