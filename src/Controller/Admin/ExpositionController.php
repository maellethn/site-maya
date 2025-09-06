<?php

namespace App\Controller\Admin;

use App\Entity\Exposition;
use App\Entity\ExpositionWork;
use App\Form\ExpositionType;
use App\Repository\ExpositionRepository;
use App\Services\File\FileUploader;
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
    public function ExpositionsAdd(Request $request, EntityManagerInterface $entityManager, FileUploader $uploader)
    {
        $exposition = new Exposition();
        $form= $this->createForm(ExpositionType::class,$exposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ExpositionWork $work */
            foreach ($form->get('works')->getData() as $work){
                if ($work->getFile())
                    $work->setFileLink($uploader->upload($work->getFile()));
            }
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
    public function ExpositionsEdit(Exposition $exposition, Request $request, EntityManagerInterface $entityManager, FileUploader $uploader)
    {
        $form= $this->createForm(ExpositionType::class,$exposition);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var ExpositionWork $work */
            foreach ($form->get('works')->getData() as $work){
                if ($work->getFile())
                    $work->setFileLink($uploader->upload($work->getFile()));
            }
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
