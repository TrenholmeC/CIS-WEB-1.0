<?php
    // for test enviornments only, apache and other reverse proxies need special configuration
    // a .htaccess is included in this folder for apache setups
    if (preg_match('/\.(?:png|jpg|gif|webp|css|js|otf|txt)($|\?)/', $_SERVER["REQUEST_URI"])) {
        return false; // static content, serve the requested resource as-is
    }

    $URL_PATH = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $PROJECT_DIR = dirname($_SERVER['DOCUMENT_ROOT']);

    require_once $PROJECT_DIR . "/vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable($PROJECT_DIR);
    $dotenv->load();

    $PRIVATE_DIR = str_replace("$", $PROJECT_DIR, $_ENV['PRIVATE_DIR']);
    $PUBLIC_DIR = str_replace("$", $PROJECT_DIR, $_ENV['PUBLIC_DIR']);

    require_once $PRIVATE_DIR . "/tools.php";

    $html_purifier_config = HTMLPurifier_Config::createDefault();
    $html_purifier_config->set('HTML.DefinitionID', 'hccis.html');
    $html_purifier_config->set('HTML.DefinitionRev', 2);
    $html_purifier_config->set('Cache.DefinitionImpl', null);
    $html_purifier_config->set('HTML.AllowedElements', $_ENV['ALLOWED_HTML_ELEMENTS']);
    $html_purifier_config->set('HTML.AllowedAttributes', $_ENV['ALLOWED_HTML_ATTRIBUTES']);

    /* create custom elements */
    if($def = $html_purifier_config->maybeGetRawHTMLDefinition(true)) {
        $def->addElement('blink-182', 'Inline', 'Inline', 'Common');
        $def->addAttribute('blink-182', 'data-blink-time', 'Number');
    }

    $HTML_PURIFIER = new HTMLPurifier($html_purifier_config);

    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;

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

    $router->get('/class/{year}', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/index.php";
    });

    $router->get('/class/{year}/highlights', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/highlights.php";
    });

    $router->get('/class/{year}/student-directory', function($year){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/student-directory.php";
    });

    $router->get('/class/{year}/student/{student}', function($year, $student){
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/class/" . $year . "/student/" . $student . "/index.php";
    });

    $router->get('/form/{form}', function($form) {
        global $PUBLIC_DIR;
        include $PUBLIC_DIR . "/form/" . $form . "/index.php";
    });

    $router->post("/form/{form}/{action}", function($form, $action) {
        global $PUBLIC_DIR, $HTML_PURIFIER, $URL_PATH;
        include $PUBLIC_DIR . "/form/" . $form . "/" . $action . ".php";
    });

    // Get the route data
    $routeData = $router->getData();

    // Dispatch the request
    $dispatcher = new Dispatcher($routeData);

    try {
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $URL_PATH);
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