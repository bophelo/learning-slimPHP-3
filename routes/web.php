<?php

use App\Models\User;
use App\Controllers\SubjectController;
use App\Controllers\UserController;
use App\Controllers\ExampleController;
use App\Controllers\TopicController;
use App\Middleware\RedirectIfUnauthenticated;
use App\Middleware\IpFilter;

$app->add(new IpFilter($container['db']));

/*$authenticated = function ($request, $response, $next) use ($container) {

    if (!isset($_SESSION['user_id'])) {
        $response = $response->withRedirect($container->router->pathFor('login'));
    }
    //$response->getBody()->write('abc');

    return $next($request, $response);

};

$token = function ($request, $response, $next) {

    $request = $request->withAttribute('token', 'abc123');
    return $next($request, $response);
};*/

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

$app->get('/userz/{id}', function ($request,$response, $args) { //[/]parameter is optional
    $user = [
        'id' => $args['id'],
        'username' => 'Billy',
        'name' => 'Billy Garret',
        'email' => 'billz@mail.com'
    ];

    return $this->view->render($response, 'profile.twig', compact('user'));
})->add($middleware);

$app->group('/topics', function () {

    $this->get('', function () {
        echo 'Topic List';
    });

    $this->get('/{id}', function ($request, $response, $args) {
        echo 'Topic ' . $args['id'];
    });

    $this->post('', function () {
        echo 'Post Topic';
    });

});

$app->get('/db', function () {
    $db_users = $this->db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_OBJ);

    var_dump($db_users);
});

$app->get('/users/{username}', function ($request, $response, $args) {
    $user = $this->db->prepare("SELECT * FROM users WHERE username = :username");
    $user->execute([
        'username' => $args['username']
    ]);

    $user = $user->fetch(PDO::FETCH_OBJ);

    return $this->view->render($response, 'users/profile.twig', [
        'user' => $user
    ]);
});

$app->get('/uzer', function() {
    $user = new User;
    var_dump($user);
});

$app->get('/uzers', UserController::class . ':index');

$app->group('/subjects', function() {
    $this->get('', SubjectController::class . ':index');
    $this->get('/{id}', SubjectController::class . ':show')->setName('subjects.show');
});

$app->group('', function () {//e.g a group for already signed in users
    $this->get('/topicz', ExampleController::class . ':store')->setName('topicz.store');
    $this->get('/topicz/create', ExampleController::class . ':create')->setName('topicz.create');//order routes with wildcards last
    $this->get('/topicz/{id}', ExampleController::class . ':show')->setName('topicz.show');
})->add(new RedirectIfUnauthenticated($container['router']));


$app->get('/topic', TopicController::class . ':index');
$app->get('/topic/{id}', TopicController::class . ':show')->setName('topic.show');

$app->get('/', function ($request, $response) {
    return $this->view->render($response,'home.twig');
})->setName('home');

$app->get('/login', function ($request, $response) {
    return 'Login';
})->setName('login');