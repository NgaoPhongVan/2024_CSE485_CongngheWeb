<?php
$controller = isset($_GET['c'])? $_GET['c'] : 'login';
$action = isset($_GET['a'])? $_GET['a'] : 'index';
$controller = ucfirst($controller);
$controller = $controller.'Controller';
$path = '../controllers/'.$controller.'.php';

//Muc tieu sau cung
if(!file_exists($path)){
    die('Tep tin khong ton tai');
    exit(1);
}
include($path);
$myController = new $controller();
if(!method_exists($controller, $action)){
    die('Phuong thuc ko ton tai');
    exit(1);
}
$myController->$action();