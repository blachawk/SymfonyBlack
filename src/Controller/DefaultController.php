<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $mvalue = 'my value : <b>don\'t hate it</b>';
        $marray = ['white', 'black', 'yellow'];
        $massarray = ['Peter' => '35', 'Ben' => '37', 'Joe' => '43'];
        $mavaluejs = '<script>console.log("we got something");</script>';
        $mproducts = ['milk' => 20, 'eggs' => 9, 'cheese' => 11];
        $product = 29878347;
        //$mtwigv = $this->getParameter('app.version');

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'mvalue' => $mvalue,
            'marray' => $marray,
            'massarray' => $massarray,
            'mvaluejs' => $mavaluejs,
            'mproducts' => $mproducts,
            'product' => $product,
            //'mtwigv' => $mtwigv,
            //'slug' => $slug,
            'mbool' => false,
        ]);
    }
}
