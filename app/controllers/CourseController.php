<?php
namespace App\Controllers;

use App\Models\Course;

class CourseController {
    public function listCourse() {
        $courseModel = new Course();   
        $courses = $courseModel->getAllCourse();
        include "app/views/courses/list.php";
    }
}
?>
