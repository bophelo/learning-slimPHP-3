<?php

namespace App\Controllers;

class ExampleController extends BaseController
{
    public function store($request, $response)
    {
        return $response->withRedirect($this->interface->router->pathFor('topicz.show', ['id' => 5]));
    }

    public function show($request, $response, $args)
    {
        echo $request->getAttribute('token');
        die();
        return 'Show Topic ' . $args['id'];
    }
}