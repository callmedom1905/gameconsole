<?php
// Tự động tải file route
$routes = require __DIR__ . '/routes.php';
// Lấy URI từ yêu cầu
$requestUri = str_replace('/gameconsole/admin/', '', $_SERVER['REQUEST_URI']);
$uri = trim($requestUri, '/');

// Tìm route phù hợps
$routeFound = false;
?>

<?php
foreach ($routes as $route => $action) {

    // Xử lý tham số động (:id)
    $routePattern = preg_replace('/:\w+/', '(\w+)', $route); // Chuyển :id thành regex
    if (preg_match("#^$routePattern$#", $uri, $matches)) {
        $routeFound = true;
        // Xử lý tham số động trong URL
        array_shift($matches); // Bỏ phần tử đầu tiên (match toàn bộ URL)
        $controllerName = $action['controller'];
        $methodName = $action['method'];

        // Gọi controller và phương thức
        if (class_exists($controllerName) && method_exists($controllerName, $methodName)) {
            $controller = new $controllerName();
            call_user_func_array([$controller, $methodName], $matches);
        } else {
            http_response_code(500);
            echo "Controller hoặc phương thức không tồn tại.";
        }
        break;
    }
}

// Xử lý nếu không tìm thấy route
if (!$routeFound) {
    http_response_code(404);
    echo "404 - Không tìm thấy trang.";
}
?>