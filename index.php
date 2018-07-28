<?php

require 'vendor/autoload.php';

//app instance
$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

//container e.g add database support, caching, other classes(dependency injection)...Singleton Pattern
//not reinstantiated multiple times
$container  = $app->getContainer();

//routes
$app->get('/', function () {
    echo $this->nothing;
});

$app->run();