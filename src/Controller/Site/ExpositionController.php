<?php

namespace App\Controller\Site;

use App\Entity\Exposition;
use App\Repository\CategorieRepository;
use App\Repository\ExpositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExpositionController extends AbstractController
{
    #[Route('/expositions', name: 'exposition_list')]
    public function expositions(ExpositionRepository $expositionRepository, CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findBy([], ['id' => 'DESC']);
        return $this->render('site/exposition/exposition_list.html.twig', [
            'categories' => $categories,
            'expositions' => $expositionRepository->findBy([], ['id' => 'DESC'])
        ]);
    }

    #[Route('/exposition/{id}', name: 'exposition_single')]
    public function exposition_single(Exposition $exposition, CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findBy([], ['id' => 'DESC']);
        return $this->render('site/exposition/exposition_single.html.twig', [
            'categories' => $categories,
            'exposition' => $exposition
        ]);
    }
}
