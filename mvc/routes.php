<?php

// nhung pages hien co
$controllers = array(
    'pages' => ['home', 'error'],
    'courses' => ['index']
);

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
//include_once('controllers/' . ucwords($controller) . 'Controller.php');
include_once('controllers/' . ucwords($controller) . 'Controller.php');
//var_dump('controllers/' . ucwords($controller) . 'Controller.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
// VD: PagesController
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';

// Mac dinh tao ra PagesController
$controller = new $klass;

// Dieu huong den 1 route
$controller->$action();