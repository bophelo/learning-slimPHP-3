<?php

namespace App\Controllers;
use App\Models\User;
use PDO;

class UserController extends BaseController
{
    public function index($request, $response)
    {
        $users = $this->interface->db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_CLASS, User::class);

        return $this->interface->view->render($response, 'users/index.twig', compact('users'));
    }

    public function show()
    {
        return 'Show single subject';
    }
}