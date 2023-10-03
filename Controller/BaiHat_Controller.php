<?php

require_once '../database.php';
require_once 'BaiHat_Model.php';

class BaiHatController {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function getAllBaiHat() {
    $conn = $this->db->getConnection();
    $result = $conn->query("SELECT * FROM BaiHat");

    $baiHatList = array();
    while ($row = $result->fetch_assoc()) {
      $baiHat = new BaiHat();
      $baiHat->setId($row['id']);
      $baiHat->setTenBaiHat($row['tenBaiHat']);
     $baiHat->setCaSi($row['caSi']);
      $baiHat->setIdTheLoai($row['idTheLoai']);
      array_push($baiHatList, $baiHat);
    }

    return $baiHatList;
  }
}
?>