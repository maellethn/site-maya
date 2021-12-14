<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use App\Repository\AcceuilRepository;
use App\Entity\Acceuil;

use \Liip\ImagineBundle\Imagine\Cache\CacheManager;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function acceuil(CategorieRepository $catRepo, AcceuilRepository $acceuilRepo, CacheManager $cacheManager): Response
    {

        $categories=$catRepo->findBy([],['Titre'=>'ASC']);
        if(count($categories)>0)
            $index=random_int(0, count($categories)-1);
        else 
            $index=0;
        $collection=$categories[$index];
        $acceuil = $acceuilRepo->find(1);
        $resolvedPath = $cacheManager->getBrowserPath($acceuil->getImage(), 'carre');
        return $this->render('site/index.html.twig', [
            'acceuil' => $acceuil,
            'categories' => $categories,
            'randomCollection'=>$collection
        ]);
    }



    /**
     * @Route("/collection/{id}", name="collection")
     */
    public function collection(CategorieRepository $catRepo, Categorie $categorie, CacheManager $cacheManager): Response
    {

        $categories = $catRepo->findAll();

        $slider=[];
            foreach ($categorie->getOeuvre() as $oeuvre) {
                $resolvedPath = $cacheManager->getBrowserPath($oeuvre->getLien(), 'carre');
                //dd($resolvedPath);
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

    /**
     * @Route("/puzzle", name="puzzle")
     */
    public function PuzzleAction()
    {
        return $this->render('site/puzzle.html.twig', [

        ]);
    }
}
