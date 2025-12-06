<?php

namespace App\Controller\Shared;

use App\Repository\CategorieRepository;
use App\Repository\ExpositionRepository;
use App\Repository\LienFooterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

abstract class FrontController extends AbstractController
{

    private CategorieRepository $categorieRepository;
    private ExpositionRepository $expositionRepository;

    private LienFooterRepository $lienFooterRepository;

    /**
     * @param CategorieRepository $categorieRepository
     * @param ExpositionRepository $expositionRepository
     * @param LienFooterRepository $lienFooterRepository
     */
    public function __construct(
        CategorieRepository $categorieRepository,
        ExpositionRepository $expositionRepository,
        LienFooterRepository $lienFooterRepository
    )
    {
        $this->categorieRepository = $categorieRepository;
        $this->expositionRepository = $expositionRepository;
        $this->lienFooterRepository = $lienFooterRepository;
    }

    protected function render(string $view, array $parameters = [], ?Response $response = null): Response
    {
        $parameters = array_merge($parameters, [
            'categories' => $this->getCategories(),
            'expositions' => $this->getExpositions(),
            'lienFooter' => $this->getLienFooter()
        ]);
        return parent::render($view, $parameters, $response);
    }
    private function getCategories(): array{
        return $this->categorieRepository->findBy([], ['id' => 'DESC']);
    }
    private function getExpositions(): array{
        return $this->expositionRepository->findBy([], ['id' => 'DESC']);
    }
    private function getLienFooter(): array{
        return $this->lienFooterRepository->findBy([], ['ordre' => 'ASC']);
    }
}
