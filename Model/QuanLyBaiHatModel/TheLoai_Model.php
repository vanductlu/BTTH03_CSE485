<?php
require_once dirname(__FILE__, 2) . '/Database.php';

class Theloai_Model {
    private $db;
    private $tableName;

    public function __construct() {
        $this->db = new Database();
        $this->tableName = 'TheLoai';
    }

    public function save($tentheloai) {
        $query = "INSERT INTO $this->tableName (tenTheLoai) VALUES ('$tentheloai')";
        return $this->db->executeNonQuery($query);
    }

    public function getById($id) {
        $query = "SELECT * FROM $this->tableName WHERE id = $id";
        return $this->db->executeQuery($query);
    }

    public function update($theloai) {
        $id = $theloai->getId();
        $tentheloai = $theloai->getTenTheloai();

        $query = "UPDATE $this->tableName SET tenTheLoai = '$tentheloai' WHERE id = $id";
        return $this->db->executeNonQuery($query);
    }

    public function delete($theloai) {
        $id = $theloai->getId();
        
        // Xóa bản ghi trong bảng BaiHat trước khi xóa thể loại
        $baihatModel = new Baihat_Model();
        $baihatModel->deleteByTheLoai($id);

        $query = "DELETE FROM $this->tableName WHERE id = $id";
        return $this->db->executeNonQuery($query);
    }
}
?>