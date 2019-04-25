<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index()
    {
        return $this->render('vehicule/index.html.twig', [
            'controller_name' => 'VehiculeController',
            'age'=>18,
        ]);
    }
   
}
