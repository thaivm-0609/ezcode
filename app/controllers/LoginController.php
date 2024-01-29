<?php
namespace App\Controllers;

class LoginController {
    public function login() {
        header('location:'.route('/admin/courses'));
    }
}
?>
