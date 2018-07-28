<?php

require 'vendor/autoload.php';

//app instance
$app = new \Slim\App;

//container e.g add database support, caching, other classes(dependency injection)...Singleton Pattern
//not reinstantiated multiple times
$container  = $app->getContainer();

$container['greeting'] = function () {
    echo 'abc';
    return 'Hello from the Container';
};

//routes
$app->get('/', function () {
    echo $this->greeting;
    echo $this->greeting;
    echo $this->greeting;
});

$app->run();