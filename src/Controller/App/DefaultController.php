<?php

namespace App\Controller\App;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     * @Template()
     */
    public function index()
    {
        return [
          "title" => "Home"
        ];
    }

    /**
     * @Route("/account")
     * @Template()
     */
    public function account()
    {
        return [
            "title" => "account"
        ];
    }

    /**
     * @Route("/account/orders")
     * @Template()
     */
    public function orders()
    {
        return [
            "title" => "Orders"
        ];
    }

    /**
     * @Route("/account/address")
     * @Template()
     */
    public function address()
    {
        return [
            "title" => "Address"
        ];
    }
}
