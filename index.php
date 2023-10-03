<?php

require_once 'TheLoai_Controller.php';
require_once 'BaiHat_Controller.php';

$theLoaiController = new TheLoaiController();
$baiHatController = new BaiHatController();

// Lấy danh sách thể loại
$theLoaiList = $theLoaiController->getAllTheLoai();

// Lấy danh sách bài hát
$baiHatList = $baiHatController->getAllBaiHat();

// Hiển thị dữ liệu
echo "<h2>Danh sách thể loại:</h2>";
foreach ($theLoaiList as $theLoai) {
  echo "ID: " . $theLoai->getId() . ", Tên thể loại: " . $theLoai->getTenTheLoai() . "<br>";
}

echo "<h2>Danh sách bài hát:</h2>";
foreach ($baiHatList as $baiHat) {
  echo "ID: " . $baiHat->getId() . ", Tên bài hát: " . $baiHat->getTenBaiHat() . ", Ca sĩ: " . $baiHat->getCaSi() . ", ID thể loại: " . $baiHat->getIdTheLoai() . "<br>";
}
?>