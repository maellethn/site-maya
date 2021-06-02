<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use App\Repository\AcceuilRepository;
use App\Entity\Acceuil;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function acceuil(CategorieRepository $catRepo, AcceuilREpository $acceuilRepo): Response
    {
        $categories=$catRepo->findAll();
        $index=random_int(0, count($categories)-1);
        $collection=$categories[$index];
        $acceuil = $acceuilRepo->find(1);
        return $this->render('site/index.html.twig', [
            'acceuil' => $acceuil,
            'categories' => $categories,
            'randomCollection'=>$collection
        ]);
    }



    /**
     * @Route("/collection/{id}", name="collection")
     */
    public function collection(CategorieRepository $catRepo, Categorie $categorie): Response
    {

        $categories = $catRepo->findAll();

        $slider=[];
            foreach ($categorie->getOeuvre() as $oeuvre) {
                if ($oeuvre->getSlider()) {
                    $slides[] = $oeuvre;
                }
            }
        return $this->render('site/collection.html.twig', [
             'categories' => $categories,
             'collection' => $categorie,
             'slider'=>$slider,
        ]);
    }
}
