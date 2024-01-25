// In your routes.php
Router::scope('/', function ($routes) {
    $routes->connect('/custom-url', ['controller' => 'Pages', 'action' => 'display', 'home']);
});
