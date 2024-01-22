<?php
use Phroute\Phroute\RouteCollector;

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

$router->get('/', [App\Controllers\CourseController::class,'listCourse']);    # match only get requests

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

?>
