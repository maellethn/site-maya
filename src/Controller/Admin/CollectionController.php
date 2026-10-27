<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/categories')]
class CollectionController extends AbstractController
{

    #[Route('/', name: 'categories')]
    public function Categories(CategorieRepository $catRepo)
    {
        $categories = $catRepo->findAll();
        return $this->render('admin/categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/ajout', name: 'ajoutCategorie')]
    public function AjoutCategorie(Request $req, EntityManagerInterface $manager)
    {
        $categorie = new Categorie;
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($categorie);
            $manager->flush();
            return $this->redirectToRoute('categories');
        }

        return $this->render('admin/ajoutCategorie.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/modification/{id}', name: 'modificationCategorie')]
    public function ModificationCategorie(Request $req, EntityManagerInterface $manager, Categorie $categorie)
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setUpdatedAt(new \DateTimeImmutable());
            if ($form->get('force_update_creation_date')->getData()){
                $categorie->setCreatedAt(new \DateTimeImmutable());
            }
            $manager->persist($categorie);
            $manager->flush();
            return $this->redirectToRoute('categories');
        }

        return $this->render('admin/ajoutCategorie.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/suppression/{id}', name: 'categories_suppression')]
    public function SuppressionCategories(Categorie $categorie, EntityManagerInterface $manager)
    {
        $manager->remove($categorie);
        $manager->flush();
        return $this->redirectToRoute('categories');
    }
}
