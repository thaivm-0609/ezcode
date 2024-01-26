<?php
namespace App\Models;

use PDO;

class BaseModel {
    //hàm kết nối với cơ sở dữ liệu
    public function getConnect() {
        $connect = new PDO(
            "mysql:host=" . DBHOST . 
            ";dbname=" . DBNAME,
            USERNAME,
            PASSWORD
        );

        return $connect;
    }

    //hàm thực hiện câu truy vấn lấy dữ liệu
    public function getData($query) {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getDataById($query) {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();

        return $stmt->fetch();
    }
}
?>
