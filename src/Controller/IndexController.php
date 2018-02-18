<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function index()
    {
        return $this->render('client/index/index.html.twig', []);
    }
}

