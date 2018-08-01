<?php

namespace App\Controllers;
use PDO;

class TopicController extends BaseController
{
    public function index($request, $response)
    {
        return $response->withStatus(404);
    }

    public function show($request, $response, $args)
    {
        $topic = $this->interface->db->prepare("SELECT * FROM topics WHERE id = :id");

        $topic->execute([
            'id' => $args['id']
        ]);

        $topic = $topic->fetch(PDO::FETCH_OBJ);

        if ($topic === false) {
            return $this->render404($response);
        }
    }
}