<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a nice controller updated');
    }

    /**
     * @Route("/questions")
     */
    public function show()
    {
        return new Response("A second page to show questions");
    }
}