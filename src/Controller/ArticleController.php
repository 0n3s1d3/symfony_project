<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
        $comments = [
            'Favere hic ducunt ad primus elevatus.',
            'Eheu, pius tata!',
            'Cur torquis unda?',
            'Audax, bi-color spatiis vix transferre de superbus, placidus devatio.',
            'Eleatess trabem!',
        ];

        return $this->render('article/show.html.twig',[
            'article' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,

        ]);
    }
}