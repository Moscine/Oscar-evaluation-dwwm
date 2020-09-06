<?php

namespace App\Controller;

use App\Entity\Acteur;
use App\Entity\Actrice;
use App\Entity\Gallery;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController
{
    /**
     * @Route("/actor", name="actor")
     */
    public function index()
    {
        return $this->render('actor/index.html.twig', [
            'controller_name' => 'ActorController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        $repo = $this->getDoctrine()->getRepository(Gallery::class);

        $gallerys= $repo->findAll();

        return $this->render('actor/home.html.twig', [
            'title' => "Meilleurs acteurs",
            'gallerys' =>$gallerys, 
        ]);
    }

    /**
     * @Route("/acteur", name="acteur")
     */
    public function acteur(){

        $repo = $this->getDoctrine()->getRepository(Acteur::class);

        $acteurs= $repo->findAll();

        return $this->render('actor/acteur.html.twig', [
            'acteurs' =>$acteurs,
            'title' => "Acteurs les plus titré"
        ]);
    }

    /**
     * @Route("/actrice", name="actrice")
     */
    public function actrice(){

        $repo = $this->getDoctrine()->getRepository(Actrice::class);

        $actrices= $repo->findAll();

        return $this->render('actor/actrice.html.twig', [
            'actrices' =>$actrices,
            'title' => 'Actrices les plus titré' 
        ]);
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery(){

        $repo = $this->getDoctrine()->getRepository(Gallery::class);

        $gallerys= $repo->findAll();

        return $this->render('actor/gallery.html.twig', [
            'gallerys' =>$gallerys, 
        ]);
    }
}
