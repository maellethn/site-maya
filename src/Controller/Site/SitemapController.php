<?php

namespace App\Controller\Site;

use App\Repository\CategorieRepository;
use App\Repository\ExpositionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SitemapController extends AbstractController
{

    #[Route('/sitemap.xml', name: 'sitemap')]
    public function __invoke(CategorieRepository $catRepo, ExpositionRepository $expRepo)
    {
        $collections = $catRepo->findAll();
        $expositions = $expRepo->findAll();
        $urls=[];
        $urls[] = [
            'loc' => $this->generateUrl(
                'site',[],
                UrlGeneratorInterface::ABSOLUTE_URL),
        ];
        $urls[] = [
            'loc' => $this->generateUrl(
                'exposition_list',[],
                UrlGeneratorInterface::ABSOLUTE_URL),
        ];
        $urls[] = [
            'loc' => $this->generateUrl(
                'puzzle',[],
                UrlGeneratorInterface::ABSOLUTE_URL),
        ];
        foreach ($collections as $categorie) {
            $urls[] = [
                'loc' => $this->generateUrl(
                    'collection',
                    ['id' => $categorie->getId()],
                    UrlGeneratorInterface::ABSOLUTE_URL
                ),
                'lastmod' => $categorie->getUpdatedAt()->format('Y-m-d'),
            ];
        }
        foreach ($expositions as $exposition) {
            $urls[] = [
                'loc' => $this->generateUrl(
                    'exposition_single',
                    ['id' => $exposition->getId()],
                    UrlGeneratorInterface::ABSOLUTE_URL
                ),
                'lastmod' => $categorie->getUpdatedAt()->format('Y-m-d'),
            ];
        }
        $response = new Response(
            $this->renderView('/site/sitemap.html.twig', ['urls' => $urls]),
            200
        );
        $response->headers->set('Content-Type', 'text/xml');

        return $response;
    }
}
