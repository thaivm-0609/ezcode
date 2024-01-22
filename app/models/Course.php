<?php
namespace App\Models;

use App\Models\BaseModel;

class Course extends BaseModel {
    //khai báo thuộc tính tên bảng
    protected $table="courses";

    //hàm lấy toàn bộ khoá học
    public function getAllCourse() {
        $query = "SELECT * FROM " . $this->table;
        // var_dump($query);
        // die;
        return $this->getData($query);
    }
}
?>
