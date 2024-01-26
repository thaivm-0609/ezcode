<?php
use Phroute\Phroute\RouteCollector;
use App\Controllers\CourseController;

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

/*request method: 
- get: kéo dữ liệu từ sv về
- post: đẩy dữ liệu lên sv (thêm mới/update)
- delete: xoá dữ liệu
- any: request nào cũng dùng được 

$route: '/', '/products'
$handler: hàm xử lý 
*/

$router->get('/', [CourseController::class,'listCourse']);    # match only get requests
$router->get('/products', function () {
    echo "products";
});

$router->filter('auth', function () {
    if (!isset($_SESSION['user'])) {
        header('location: '.BASE_URL.'login');
        
        return false;
    }
});

//filter group
//prefix
$router->group(['prefix'=>'admin'], function ($router) {
    $router->get('/courses', [CourseController::class,'listCourse']);
    $router->get('/courses/{id}/edit', [CourseController::class, 'edit']);
    $router->post('/courses/{id}/update', [CourseController::class, 'update']);
    
    $router->get('/users', [CourseController::class,'listCourse']);
    $router->get('/comments', [CourseController::class,'listCourse']);    
});

$router->get('/login', function () {
    echo "Đây là trang đăng nhập";
});

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

?>
