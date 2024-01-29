<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Course;

class CourseController extends BaseController {
    public function listCourse() {
        $courseModel = new Course();   
        $courses = $courseModel->getAllCourse();
        $title = "Danh sách khoá học";
        // include "app/views/courses/list.php";
        $this->render('courses.list',compact('courses','title'));
    }

    public function edit($id) { //trả về form sửa thông tin
        $courseModel = new Course(); 
        $course = $courseModel->getById($id);

        var_dump($course);
    }

    public function create() {
        $this->render('courses.add');
    }
}
?>
