<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;

class PageDeLoginController extends AbstractController
{
    /**
     * @Route("/page/de/login", name="app_page_de_login")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'PageDeLoginController',
        ]);
    }
}
