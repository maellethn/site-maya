<?php

namespace App\Controller\Admin;

use App\Entity\Exposition;
use App\Form\ExpositionType;
use App\Repository\ExpositionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class ExpositionController extends AbstractController
{

    #[Route('/expositions', name: 'admin_exposition_lists')]
    public function ExpositionsList(ExpositionRepository $expositionRepository)
    {
        $expositions=$expositionRepository->findAll();
        return $this->render('admin/exposition/expositions_list.html.twig', [
            'expositions' => $expositions,
        ]);
    }

    #[Route('/exposition/add', name: 'admin_exposition_add')]
    public function ExpositionsAdd(Request $request, EntityManagerInterface $entityManager)
    {
        $exposition = new Exposition();
        $form= $this->createForm(ExpositionType::class,$exposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($exposition);
            $entityManager->flush();
            return $this->redirectToRoute('admin_exposition_lists');
        }

        return $this->render('admin/exposition/exposition_form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Ajouter une exposition'
        ]);
    }

    #[Route('/exposition/edit/{id}', name: 'admin_exposition_edit')]
    public function ExpositionsEdit(Exposition $exposition, Request $request, EntityManagerInterface $entityManager)
    {
        $form= $this->createForm(ExpositionType::class,$exposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($exposition);
            $entityManager->flush();
            return $this->redirectToRoute('admin_exposition_lists');
        }

        return $this->render('admin/exposition/exposition_form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Modifier l\'exposition '.$exposition->getTitle()
        ]);
    }
}
