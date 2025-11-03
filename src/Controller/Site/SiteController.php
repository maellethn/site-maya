<?php

namespace App\Controller\Site;

use App\Controller\Shared\FrontController;
use App\Entity\Categorie;
use App\Repository\AcceuilRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SiteController extends FrontController
{

    #[Route('/', name: 'site')]
    public function acceuil(CategorieRepository $catRepo, AcceuilRepository $acceuilRepo): Response
    {
        $categories=$catRepo->findBy([], ['id'=> 'DESC']);
        if(count($categories)>0)
            $index=random_int(0, count($categories)-1);
        else
            $index=0;
        $collection=$categories[$index];
        $puzzle=$acceuilRepo->find(1)->getPuzzleCollection();
        for ($i=0; $i < count($categories); $i++) {
            if ($categories[$i]->getId() == $puzzle->getId())
                unset($categories[$i]);
        }
        $acceuil = $acceuilRepo->find(1);
        return $this->render('site/index.html.twig', [
            'acceuil' => $acceuil,
            'categories' => $categories,
            'randomCollection'=>$collection,

        ]);
    }

    #[Route('/collection/{id}', name: 'collection')]
    public function collection(CategorieRepository $catRepo, Categorie $categorie, AcceuilRepository $acceuilRepo): Response
    {
        $categories=$catRepo->findBy([], ['id'=> 'DESC']);
        $slider=[];
            foreach ($categorie->getOeuvre() as $oeuvre) {
                if ($oeuvre->getSlider()) {
                    $slider[] = $oeuvre;
                }
            }
        $puzzle=$acceuilRepo->find(1)->getPuzzleCollection();

        for ($i=0; $i < count($categories); $i++) {
            if ($categories[$i]->getId() == $puzzle->getId())
                unset($categories[$i]);
        }
        return $this->render('site/collection.html.twig', [
             'categories' => $categories,
             'collection' => $categorie,
             'slider'=>$slider
        ]);
    }

    #[Route('/puzzle', name: 'puzzle')]
    public function PuzzleAction(CategorieRepository $catRepo, AcceuilRepository $acceuilRepo): Response
    {
        $categories=$catRepo->findBy([], ['id'=> 'DESC']);
        return $this->render('site/puzzle.html.twig', [
            'categories' => $categories,
            'collection' => $acceuilRepo->find(1)->getPuzzleCollection(),
        ]);
    }
}
