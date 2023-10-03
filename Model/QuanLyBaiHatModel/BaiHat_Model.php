<?php

class BaiHat {
  private $id;
  private $tenBaiHat;
  private $caSi;
  private $idTheLoai;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTenBaiHat() {
    return $this->tenBaiHat;
  }

  public function setTenBaiHat($tenBaiHat) {
    $this->tenBaiHat = $tenBaiHat;
  }

  public function getCaSi() {
    return $this->caSi;
  }

  public function setCaSi($caSi) {
    $this->caSi = $caSi;
  }

  public function getIdTheLoai() {
    return $this->idTheLoai;
  }

  public function setIdTheLoai($idTheLoai) {
    $this->idTheLoai = $idTheLoai;
  }
}
?>