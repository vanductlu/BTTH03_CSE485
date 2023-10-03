<?php
require dirname(__FILE__ , 2) . '/Model/BaiHat_Model.php';

class BaiHat_Controller {
    function read() {
        $aps = '';
        $query = $_GET['name'];
        $BaiHat_Model = new Database();
        include dirname(__FILE__, 2) . '/View/Tu/TuReadView.php';
    }
    function create() {

    }
    function update() {

    }
    function delete() {}
}