<?php

namespace App\Controller\Site;

use App\Controller\Shared\FrontController;
use App\Entity\Exposition;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Response;

class ExpotionController extends FrontController
{
    #[Route('/exposition/{id}', name: 'exposition')]
    public function acceuil(Exposition $exposition,CategorieRepository $categorieRepository): Response
    {
        $categories=$categorieRepository->findBy([], ['id'=> 'DESC']);
        return $this->render('site/index.html.twig', [
            'categories' => $categories,
            'exposition' => $exposition
        ]);
    }
}
