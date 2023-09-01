<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('первая страница!!!');
    }

    /**
     * @Route("/article/{slug}")
     */
    public function show($slug): Response
    {
        return new Response(sprintf(
            'будущая страница статьи: %s',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}