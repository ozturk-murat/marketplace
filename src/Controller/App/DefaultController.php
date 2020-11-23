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

    /**
     * @Route("/account/card/delivery"),
     * @Template()
     */
    public function delivery()
    {
        return [
            "title" => "Delivery"
        ];
    }

    /**
     * @Route("/account/card/payment"),
     * @Template()
     */
    public function payment()
    {
        return [
            "title" => "Payment"
        ];
    }

    /**
     * @Route("/account/card/success"),
     * @Template()
     */
    public function success()
    {
        return [
            "title" => "success"
        ];
    }

}
