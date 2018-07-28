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

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/resources/views', [
        'cache' => 'false'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));

    return $view;
};

//routes
$app->get('/', function ($request, $response) {
    return $this->view->render($response,'home.twig');
})->setName('home');

$app->get('/users', function ($request, $response) {
    $users = [
        [
            'username' => 'mikey',
            'name' => 'Michael Geng',
            'email' => 'mike.geng@mail.com'
        ],
        [
            'username' => 'terry',
            'name' => 'Terrance Lamar',
            'email' => 'terrance@mail.com'
        ],
        [
            'username' => 'jamesy',
            'name' => 'James Francesco',
            'email' => 'francesco.james@mail.com'
        ]
    ];

    /*$user = [
        'username' => 'Billy',
        'name' => 'Billy Garret',
        'email' => 'billz@mail.com'
    ];*/

    return $this->view->render($response,'users.twig', [
        'users' => $users,
    ]);
})->setName('users.index');

$app->get('/contact', function ($request,$response) {
    return $this->view->render($response, 'contact.twig');
})->setName('contact');

$app->post('/contact', function ($request,$response) {
    var_dump($request->getParams());//can also be used for pagination???
})->setName('contact');

$app->get('/message', function ($request,$response) {
    return $this->view->render($response, 'message.twig');
})->setName('message');

$app->post('/message', function ($request,$response) {
    return $response->withRedirect('http://localhost:8888/message/confirm');
})->setName('message');

$app->get('/message/confirm', function ($request,$response) {
    return $this->view->render($response, 'message_confirmed.twig');
});

$app->run();