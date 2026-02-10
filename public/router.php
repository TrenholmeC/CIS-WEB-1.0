<?php
    /* Simple Router */

    if (preg_match('/\.(?:png|jpg|jpeg|gif|webp|css|js|otf)($|\?)/', $_SERVER["REQUEST_URI"])) {
        return false; // static content, serve the requested resource as-is
    }

    $PROJECT_DIR = dirname($_SERVER['DOCUMENT_ROOT']);
    $PRIVATE_DIR = $PROJECT_DIR . "/private";
    $PUBLIC_DIR = $PROJECT_DIR . "/public";

    require_once $PROJECT_DIR . "/vendor/autoload.php";
    require_once $PRIVATE_DIR . "/tools.php";

    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

    // Create a route collector
    $router = new RouteCollector();

    $router->get('/', function(){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/index.php";
    });

    $router->get('/topic/{topic}', function($topic){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/topic/" . $topic . "/index.php";
    });

    $router->get('/class-directory', function(){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class-directory.php";
    });

    $router->get('/class/{year}/highlights', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/highlights.php";
    });

    $router->get('/class/{year}/student-directory', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/student-directory.php";
    });

    $router->get('/class/2027/student/{student}', function($student){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/2027/student/" . $student . "/index.php";
    });

    $router->get('/class/{year}', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/index.php";
    });

    // Get the route data
    $routeData = $router->getData();

    // Dispatch the request
    $dispatcher = new Dispatcher($routeData);

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        echo $response;
    } catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
        // Handle 404 Not Found
        header('HTTP/1.0 404 Not Found');
        echo '404 Not Found';
    } catch (Exception $e) {
        // Handle other errors
        header('HTTP/1.0 500 Internal Server Error');
        echo '500 Internal Server Error';
    }
?>