<?php

namespace App\Controller\Shared;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

abstract class FrontController extends AbstractController
{
    protected function render(string $view, array $parameters = [], ?Response $response = null): Response
    {
        $parameters = array_merge($parameters, [
            'categories' => $this->getCategories()
        ]);
        return parent::render($view, $parameters, $response);
    }
    private function getCategories(CategorieRepository $categorieRepository): array{
        return $categorieRepository->findBy([], ['id' => 'DESC']);
    }
}
