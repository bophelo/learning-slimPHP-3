<?php

session_start();

unset($_SESSION['user_id']);

require __DIR__ . '/../vendor/autoload.php';

//app instance
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

//container e.g add database support, caching, other classes(dependency injection)...Singleton Pattern
//not reinstantiated multiple times
$container  = $app->getContainer();

/*$container['db'] = function () {
    return new PDO('mysql:host=localhost;dbname=slim','root','&6rUB3,_9EyD');
};*/

$container['db'] = function () {
    return new PDO('mysql:host=localhost;dbname=slim','root','&6rUB3,_9EyD');
};

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => 'false'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));

    return $view;
};

$middleware = function($request, $response, $next) {

    $response->getBody()->write('Before');
    $response = $next($request, $response);//call next middleware in the stack, do something afterward
    $response->getBody()->write('After');

    return $response;
};

require __DIR__ . '/../routes/web.php';