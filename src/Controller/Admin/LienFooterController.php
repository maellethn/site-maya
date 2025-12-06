<?php

namespace App\Controller\Admin;

use App\Entity\LienFooter;
use App\Form\LienFooterType;
use App\Repository\LienFooterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/lien-footer')]
class LienFooterController extends AbstractController
{
    #[Route('/', name: 'admin_lien_footer_list')]
    public function list(LienFooterRepository $lienFooterRepository)
    {
        $liensFooter = $lienFooterRepository->findAll();
        return $this->render('admin/lien_footer/list.html.twig', [
            'liens' => $liensFooter,
        ]);
    }
    #[Route('/add', name: 'admin_lien_footer_add')]
    public function add(Request $request, EntityManagerInterface $entityManager)
    {
        $lienFooter = new LienFooter();
        $form= $this->createForm(LienFooterType::class,$lienFooter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lienFooter);
            $entityManager->flush();
            return $this->redirectToRoute('admin_lien_footer_list');
        }

        return $this->render('admin/lien_footer/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Ajouter un Lien de bas de page'
        ]);
    }
    #[Route('/edit/{id}', name: 'admin_lien_footer_edit')]
    public function edit(Request $request,LienFooter $lienFooter,EntityManagerInterface $entityManager)
    {
        $form= $this->createForm(LienFooterType::class,$lienFooter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lienFooter);
            $entityManager->flush();
            return $this->redirectToRoute('admin_lien_footer_list');
        }

        return $this->render('admin/lien_footer/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Modification du Lien '.$lienFooter->getLabel()
        ]);
    }
    #[Route('/suppression/{id}', name: 'admin_lien_footer_suppression')]
    public function delete(LienFooter $lienFooter, EntityManagerInterface $manager)
    {
        $manager->remove($lienFooter);
        $manager->flush();
        return $this->redirectToRoute('admin_exposition_lists');
    }
}