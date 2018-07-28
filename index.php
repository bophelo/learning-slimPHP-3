<?php

require 'vendor/autoload.php';

//app instance
$app = new \Slim\App;

//routes
$app->get('/', function () {
    echo 'Home';
});

$app->get('/users', function () {
    echo 'Users';
});

$app->run();