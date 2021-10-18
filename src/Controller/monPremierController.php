<?php

namespace App\Controller;

use App\Entity\User;
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
        $personne = 'nom';
        return $this->render('index/index.html.twig', [
            'personne' => $personne,
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

    #[Route(
        '/identification',
        name: 'connexion'
    )]
    public function connexion(){
        return $this->render('identification/connexion.html.twig', [

        ]);
    }

    #[Route(
        '/identification',
        name: 'newacount'
    )]
    public function newacount(){

        return $this->render('identification/newacount.html.twig', [

        ]);
    }
}