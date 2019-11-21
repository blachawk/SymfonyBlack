<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home.html.twig', []);
    }

    /**
     * @Route("/{slug}", name="articles")
     *
     * @param mixed $slug
     */
    public function show($slug)
    {
        $mvalue = 'my value : <b>don\'t hate it</b>';
        $marray = ['white', 'black', 'yellow'];
        $massarray = ['Peter' => '35', 'Ben' => '37', 'Joe' => '43'];
        $mavaluejs = '<script>console.log("we got something");</script>';
        $mproducts = ['milk' => 20, 'eggs' => 9, 'cheese' => 11];
        $product = 29878347;

        return $this->render('articles.html.twig', [
            'controller_name' => 'DefaultController',
            'slug' => $slug,
            'mvalue' => $mvalue,
            'marray' => $marray,
            'massarray' => $massarray,
            'mvaluejs' => $mavaluejs,
            'mproducts' => $mproducts,
            'product' => $product,
            'mbool' => false,
        ]);
    }
}
