<?php

namespace App\Controllers;
use Interop\Container\ContainerInterface;

abstract class BaseController
{
    //when common things, that are shared a lot arise, look to export them to separate classes or files. 
    protected $interface;

    public function __construct(ContainerInterface $interface)
    {
        $this->interface = $interface;
    }

    protected function render404($response)
    {
        return $this->interface->view->render($response->withStatus(404), 'errors/404.twig');
    }
}