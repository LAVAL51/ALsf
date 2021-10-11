<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class monPremierController
{
    #[Route(
        '/',
        name: 'index'
    )]
    public function index()
    {
        return new Response("Bonjour j'utilise PHP strom avec sf");
    }

    #[Route(
        '/contact/{slug}',
        name: 'contact'
    )]
    public function contact($slug)
    {
        return new Response(sprintf(
            'Comming Soon "%s"',
            ucWords(str_replace('-', ' ', $slug))
        ));
    }
}