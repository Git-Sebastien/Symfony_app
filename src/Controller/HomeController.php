<?php 

namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;


class HomeController {


    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index() :Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }

}