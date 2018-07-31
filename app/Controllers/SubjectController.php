<?php

namespace App\Controllers;
use PDO;
use App\Models\Topic;

class SubjectController extends BaseController
{
    public function index($request, $response)
    {
        $topics = $this->interface->db->query("SELECT * FROM topics")->fetchAll(PDO::FETCH_CLASS, Topic::class);

        return $this->interface->view->render($response, 'subjects/index.twig', compact('topics'));
    }

    public function show($request, $response, $args)
    {
        $topic = $this->interface->db->prepare("SELECT * FROM topics WHERE id = :id");

        $topic->execute([
            'id' => $args['id']
        ]);

        $topic = $topic->fetch(PDO::FETCH_OBJ);

        return $this->interface->view->render($response, 'subjects/show.twig', compact('topic'));
    }
}