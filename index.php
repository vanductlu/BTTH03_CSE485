<?php

$pdo =  new PDO("mysql:host=localhost;dbname=QuanLyBaiHat", "root", "");

// ROOT
// lch:300/asd/a?controller=tu&action=create
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'read';

if ($controller === 'home') {
    require_once './Controller/HomeController.php';
    $HomeController = new HomeController();
    if ($action === 'read') $HomeController->read();
    else if ($action === 'create') $HomeController->create();
    else if ($action === 'update') $HomeController->update();
    else if ($action === 'delete') $HomeController->delete();
} else if ($controller === 'TheLoai') {
    require_once './Controller/TheLoai_Controller.php';
    $TheLoai_Controller = new TheLoai_Controller();
    if ($action === 'read') $TheLoai_Controller->read();
    else if ($action === 'create') $TheLoai_Controller->create();
    else if ($action === 'update') $TheLoai_Controller->update();
    else if ($action === 'delete') $TheLoai_Controller->delete();
}

else if ($controller === 'BaiHat') {
    require_once './Controller/BaiHat_Controller.php';
    $BaiHat_Controller = new BaiHat_Controller();
    if ($action === 'read') $BaiHat_Controller->read();
    else if ($action === 'create') $BaiHat_Controller->create();
    else if ($action === 'update') $BaiHat_Controller->update();
    else if ($action === 'delete') $BaiHat_Controller->delete();
}

