<?php

namespace App\Controllers;

class SubjectController extends BaseController
{
    protected $interface;

    public function __construct(ContainerInterface $interface)
    {
        $this->interface = $interface;
    }

    public function index($request, $response)
    {
        return $this->interface->view->render($response, 'subjects/index.twig');
    }

    public function show()
    {
        return 'Show single subject';
    }
}