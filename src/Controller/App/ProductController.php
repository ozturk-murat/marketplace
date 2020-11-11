<?php

namespace App\Controller\App;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function list()
    {
        return [
            "title" => "Product List"
        ];
    }

     /**
     * @Route("/{slug}")
     * @Template()
     */
    public function detail($slug)
    {
        return [
            "title" => "Product List"
        ];
    }
}
