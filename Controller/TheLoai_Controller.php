<?php
require_once dirname(__FILE__, 2) . '/Model/QuanLyBaiHatModel/Theloai_Model.php';

class TheloaiController {
    private $theloaiDAO;

    public function __construct() {
        // Khởi tạo đối tượng Database
        $db = new Database();
        // Kết nối cơ sở dữ liệu
        $db->connect();
        // Khởi tạo đối tượng TheloaiDAO và truyền đối tượng Database vào
        $this->theloaiDAO = new TheloaiDAO($db);
    }

    public function addTheloai($tentheloai) {
        // Gọi phương thức save() từ đối tượng TheloaiDAO để thêm mới thể loại
        $theloai = new Theloai(null, $tentheloai);
        $result = $this->theloaiDAO->save($theloai);

        // Xử lý kết quả và trả về kết quả cho view (nếu cần)
        if ($result) {
            echo "Thêm thể loại thành công!";
        } else {
            echo "Thêm thể loại thất bại!";
        }
    }

    public function getTheloaiById($id) {
        // Gọi phương thức getById() từ đối tượng TheloaiDAO để lấy thông tin thể loại theo id
        $theloai = $this->theloaiDAO->getById($id);

        // Kiểm tra xem dữ liệu có tồn tại hay không
        if ($theloai) {
            // Xử lý kết quả và trả về kết quả cho view (nếu cần)
            echo "Thông tin thể loại:";
            echo "ID: " . $theloai->getId();
            echo "Tên thể loại: " . $theloai->getTenTheloai();
        } else {
            echo "Không tìm thấy thể loại!";
        }
    }

    public function updateTheloai($id, $tentheloai) {
        // Gọi phương thức getById() từ đối tượng TheloaiDAO để kiểm tra xem thể loại có tồn tại hay không
        $theloai = $this->theloaiDAO->getById($id);

        if ($theloai) {
            // Cập nhật thông tin thể loại
            $theloai->setTenTheloai($tentheloai);
            $result = $this->theloaiDAO->update($theloai);

            // Xử lý kết quả và trả về kết quả cho view (nếu cần)
            if ($result) {
                echo "Cập nhật thể loại thành công!";
            } else {
                echo "Cập nhật thể loại thất bại!";
            }
        } else {
            echo "Không tìm thấy thể loại!";
        }
    }

    public function deleteTheloai($id) {
        // Gọi phương thức getById() từ đối tượng TheloaiDAO để kiểm tra xem thể loại có tồn tại hay không
        $theloai = $this->theloaiDAO->getById($id);

        if ($theloai) {
            // Xóa thể loại
            $result = $this->theloaiDAO->delete($theloai);

            // Xử lý kết quả và trả về kết quả cho view (nếu cần)
        }
    }
}