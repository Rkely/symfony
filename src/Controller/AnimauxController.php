<?php

namespace App\Controller;
use App\Entity\Animaux;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimauxController extends AbstractController
{
    /**
     * @Route("/animaux", name="animaux")
     */
    public function index()
    {
        return $this->render('animaux/index.html.twig', [
            'controller_name' => 'AnimauxController',
        ]);
    }
     /**
     * @Route("/nouveau", name="show")
     */
    public function issa(){
        $repo = $this->getDoctrine()->getRepository(Animaux::class);
        $manager= $this->getDoctrine()->getManager();
        $animaux = new Animaux();
         $animaux->setNom('sam');
        $animaux ->setPrenom('sam');
        $animaux ->setAge(12);
        $donne = $repo->findAll();
        //$manager->persist($animaux);
        //$manager->flush();

    	return $this->render('vehicule.html.twig',[
            'donne'=>$donne]);
    }
}
 