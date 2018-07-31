<?php

use App\Models\User;

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
});

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