<?php

namespace App\Controller\App;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function index()
    {
        return [
          "title" => "Home"
        ];
    }
}
