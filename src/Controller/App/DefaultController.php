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

    /**
     * @Route("/account/coupons")
     * @Template()
     */
    public function coupons()
    {
        return [
            "title" => "Coupons"
        ];
    }

    /**
     * @Route("/account/liked")
     * @Template()
     */
    public function liked()
    {
        return [
            "title" => "Liked"
        ];
    }

    /**
     * @Route("/account/card")
     * @Template()
     */
    public function card()
    {
        return [
            "title" => "Shopping Card"
        ];
    }

}
