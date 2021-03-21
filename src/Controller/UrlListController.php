<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UrlListController extends AbstractController
{
    #[Route('/url/list', name: 'url_list')]
    public function index(): Response
    {
        return $this->render('url_list/index.html.twig', [
            'controller_name' => 'UrlListController',
        ]);
    }
}
