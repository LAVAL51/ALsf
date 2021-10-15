<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class monPremierController extends AbstractController
{
    #[Route(
        '/',
        name: 'index'
    )]
    public function index()
    {
        return $this->render('index/index.html.twig', [

    ]);
    }

    #[Route(
        '/contact/{slug}',
        name: 'contact'
    )]
    public function contact($slug)
    {
        $mescontact = [
            'Anthony LAVAL',
            'Boby LEBARBARE',
            'Jean-Michel',
        ];

        return $this->render('contact/show.html.twig', [
            'contact' =>  ucWords(str_replace('-', ' ', $slug)),
            'mescontact'=> $mescontact,
    ]);
    }
}