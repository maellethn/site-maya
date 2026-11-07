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

#[Route('/admin/expositions')]
class ExpositionController extends AbstractController
{
    #[Route('/', name: 'admin_exposition_lists')]
    public function ExpositionsList(ExpositionRepository $expositionRepository)
    {
        $expositions=$expositionRepository->findAll();
        return $this->render('admin/exposition/expositions_list.html.twig', [
            'expositions' => $expositions,
        ]);
    }

    #[Route('/add', name: 'admin_exposition_add')]
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

    #[Route('/edit/{id}', name: 'admin_exposition_edit')]
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
            $exposition->setUpdatedAt(new \DateTimeImmutable());
            if ($form->get('force_update_creation_date')->getData()){
                $exposition->setCreatedAt(new \DateTimeImmutable());
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

    #[Route('/suppression/{id}', name: 'admin_exposition_suppression')]
    public function SuppressionCategories(Exposition $exposition, EntityManagerInterface $manager)
    {
        $manager->remove($exposition);
        $manager->flush();
        return $this->redirectToRoute('admin_exposition_lists');
    }
}
