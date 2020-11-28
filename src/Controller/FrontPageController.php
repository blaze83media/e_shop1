<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontPageController extends AbstractController
{
    /**
     * @Route("/", name="front_page")
     */
    public function index(): Response
    {
        return $this->render('front_page/index.html.twig', [
            'controller_name' => 'FrontPageController',
        ]);
    }


    public function nav_bar(): Response
    {
        return $this->render('front_page/navbar.html.twig', [
            'controller_name' => 'FrontPageController',
        ]);
    }


    public function nav_bar2(): Response
    {
        return $this->render('front_page/navbar2.html.twig', [
            'controller_name' => 'FrontPageController',
        ]);
    }


    public function carousel1(): Response
    {
        return $this->render('front_page/carousel1.html.twig', [
            'controller_name' => 'FrontPageController',
        ]);
    }



}
