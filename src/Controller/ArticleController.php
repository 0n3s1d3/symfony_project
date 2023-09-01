<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twig): Response
    {
        $html = $twig->render('article/homepage.html.twig');
        return new Response($html);
    }

    /**
     * @Route("/article/{slug}", name="app_article_show")
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