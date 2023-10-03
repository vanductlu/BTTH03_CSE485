<?php

require_once '../database.php';
require_once 'TheLoai_Model.php';

class TheLoaiController {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function getAllTheLoai() {
    $conn = $this->db->getConnection();
    $result = $conn->query("SELECT * FROM TheLoai");

    $theLoaiList = array();
    while ($row = $result->fetch_assoc()) {
      $theLoai = new TheLoai();
      $theLoai->setId($row['id']);
      $theLoai->setTenTheLoai($row['tenTheLoai']);
      array_push($theLoaiList, $theLoai);
    }

    return $theLoaiList;
  }
}
?>