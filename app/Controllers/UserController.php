<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        return 'List of Users';
    }

    public function show()
    {
        return 'Show single subject';
    }
}