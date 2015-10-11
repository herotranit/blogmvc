<?php


error_reporting(E_ALL ^ E_DEPRECATED);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

require ROOT . DS . 'includes' . DS . 'common.php';//nạp thư viện

$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']);//lấy giá trị ở biến c="" tên controller
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);//lay phuong thuc m=""

$c_file = ROOT . DS . 'controllers' . DS . $controller . '.php'; //ghep mảng bằn dấu . có nghĩa là khi ?c=test&m=list thì nó thành testcontroller.php
$m_func = $controller . '_' . $method;//ghep mảng bằn dấu . có nghĩa là khi ?c=test&m=list test_list

if (is_readable($c_file)) {
  include $c_file;
  call_user_func($m_func);//call_user_func là 1 hàm trong php cho phép ng dùng gọi tới hàm mà người dùng tự định nghĩa 
} else {
}
