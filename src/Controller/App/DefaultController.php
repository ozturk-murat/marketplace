<?php

namespace App\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/app/default", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('app/default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
