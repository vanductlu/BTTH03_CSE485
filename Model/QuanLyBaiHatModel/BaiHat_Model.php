<?php
require_once dirname(__FILE__, 2) . '/Database.php';

class Baihat_Model {
    private $db;
    private $tableName;

    public function __construct() {
        $this->db = new Database();
        $this->tableName = 'BaiHat';
    }

    public function save($tenbaihat, $casi, $idtheloai) {
        $query = "INSERT INTO $this->tableName (tenBaiHat, caSi, idTheLoai) VALUES ('$tenbaihat', '$casi', $idtheloai)";
        return $this->db->executeNonQuery($query);
    }

    public function getById($id) {
        $query = "SELECT * FROM $this->tableName WHERE id = $id";
        return $this->db->executeQuery($query);
    }

    public function getByTheLoai($idtheloai) {
        $query = "SELECT * FROM $this->tableName WHERE idTheLoai = $idtheloai";
        return $this->db->executeQuery($query);
    }

    public function update($baihat) {
        $id = $baihat->getId();
        $tenbaihat = $baihat->getTenBaiHat();
        $casi = $baihat->getCaSi();
        $idtheloai = $baihat->getIdTheLoai();

        $query = "UPDATE $this->tableName SET tenBaiHat = '$tenbaihat', caSi = '$casi', idTheLoai = $idtheloai WHERE id = $id";
        return $this->db->executeNonQuery($query);
    }

    public function delete($baihat) {
        $id = $baihat->getId();
        $query = "DELETE FROM $this->tableName WHERE id = $id";
        return $this->db->executeNonQuery($query);
    }

    public function deleteByTheLoai($idtheloai) {
        $query = "DELETE FROM $this->tableName WHERE idTheLoai = $idtheloai";
        return $this->db->executeNonQuery($query);
    }
}
?>