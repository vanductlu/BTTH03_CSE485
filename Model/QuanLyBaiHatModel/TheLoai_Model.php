<?php

class TheLoai {
  private $id;
  private $tenTheLoai;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTenTheLoai() {
    return $this->tenTheLoai;
  }

  public function setTenTheLoai($tenTheLoai) {
    $this->tenTheLoai = $tenTheLoai;
  }
}
?>