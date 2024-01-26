<?php
namespace App\Controllers;

use App\Models\Course;

class CourseController {
    public function listCourse() {
        $courseModel = new Course();   
        $courses = $courseModel->getAllCourse();
        include "app/views/courses/list.php";
    }

    public function edit($id) { //trả về form sửa thông tin
        $courseModel = new Course(); 
        $course = $courseModel->getById($id);

        var_dump($course);
    }
}
?>
