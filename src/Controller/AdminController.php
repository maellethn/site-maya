<?php

namespace App\Controller;

use WebPConvert\WebPConvert;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Form\CategorieType;

use App\Entity\Couleur;
use App\Repository\CouleurRepository;
use App\Form\CouleurType;

use App\Entity\Oeuvre;
use App\Repository\OeuvreRepository;
use App\Form\OeuvreType;


/**
 * @Route("/admin")
 */

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/categories", name="categories")
     */
    public function Categories(CategorieRepository $catRepo)
    {
        $categories=$catRepo->findAll();
        return $this->render('admin/categories.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/couleurs", name="couleurs")
     */
    public function Couleurs(CouleurRepository $couleurRepo)
    {
        $couleurs=$couleurRepo->findAll();
        return $this->render('admin/couleurs.html.twig', [
            'couleurs' => $couleurs,
        ]);
    }

    /**
     * @Route("/oeuvres", name="oeuvres")
     */
    public function Oeuvres(OeuvreRepository $oeuvreRepo)
    {
        $oeuvres=$oeuvreRepo->findAll();
        return $this->render('admin/oeuvres.html.twig', [
            'oeuvres' => $oeuvres,
        ]);
    }

    /**
     * @Route("/couleurs/ajout", name="ajoutCouleur",methods={"GET","POST"})
     */
    public function AjoutCouleur(Request $req, EntityManagerInterface $manager)
    {
        $couleur= new Couleur;
        $form= $this->createForm(CouleurType::class,$couleur);
    	$form->handleRequest($req);

    	if ($form->isSubmitted() && $form->isValid()) {

    		$manager->persist($couleur);
    		$manager->flush();
    		return $this->redirectToRoute('couleurs');
    	}
       
        return $this->render('admin/ajoutCouleur.html.twig', [
        	'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/oeuvres/ajout", name="ajoutOeuvre",methods={"GET","POST"})
     */
    public function AjoutOeuvre(Request $req, EntityManagerInterface $manager)
    {
        $oeuvre= new Oeuvre;
        $form= $this->createForm(OeuvreType::class,$oeuvre);
    	$form->handleRequest($req);

    	$path=$this->getParameter('kernel.project_dir').'/public/images';

    	if ($form->isSubmitted() && $form->isValid()) {

    		$file=$form->get('File')->getData();
    		$name=md5(uniqid()).'.'.$file->guessExtension();
    		$file->move($path,$name);
            
            //webPconvert
            $source = 'images/'.$name;
            $destination = $source . '.webp';
            $options = [];
            WebPConvert::convert($source, $destination, $options);

            $oeuvre->setLien($destination);

    		$manager->persist($oeuvre);
    		$manager->flush();
    		return $this->redirectToRoute('oeuvres');
    	}
       
        return $this->render('admin/ajoutOeuvre.html.twig', [
        	'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/categories/ajout", name="ajoutCategorie",methods={"GET","POST"})
     */
    public function AjoutCategorie(Request $req, EntityManagerInterface $manager)
    {
        $categorie= new Categorie;
        $form= $this->createForm(CategorieType::class,$categorie);
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

    /**
     * @Route("/categories/suppression/{id}", name="categories_suppression")
     */
    public function SuppressionCategories(Categorie $categorie, EntityManagerInterface $manager)
    {
        $manager->remove($categorie);
        $manager->flush();
        return $this->redirectToRoute('categories');
    }

    /**
     * @Route("/oeuvres/suppression/{id}", name="oeuvres_suppression")
     */
    public function SuppressionOeuvres(Oeuvre $oeuvre, EntityManagerInterface $manager)
    {
        $manager->remove($oeuvre);
        $manager->flush();
        return $this->redirectToRoute('oeuvres');
    }

    /**
     * @Route("/couleurs/suppression/{id}", name="couleurs_suppression")
     */
    public function SuppressionCouleurs(Couleur $couleur, EntityManagerInterface $manager)
    {
        $manager->remove($couleur);
        $manager->flush();
        return $this->redirectToRoute('couleurs');
    }

    /**
     * @Route("/categories/modification/{id}", name="modificationCategorie",methods={"GET","POST"})
     */
    public function ModificationCategorie(Request $req, EntityManagerInterface $manager, Categorie $categorie)
    {
        $form= $this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($categorie);
            $manager->flush();
            return $this->redirectToRoute('categories');
        }
       
        return $this->render('admin/ajoutCategorie.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/oeuvres/modification/{id}", name="modificationOeuvre",methods={"GET","POST"})
     */
    public function ModificationOeuvre(Request $req, EntityManagerInterface $manager, Oeuvre $oeuvre)
    {
        $form= $this->createForm(OeuvreType::class,$oeuvre);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($oeuvre);
            $manager->flush();
            return $this->redirectToRoute('oeuvres');
        }
       
        return $this->render('admin/ajoutOeuvre.html.twig', [
            'oeuvre' => $oeuvre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/couleurs/modification/{id}", name="modificationCouleur",methods={"GET","POST"})
     */
    public function ModificationCouleur(Request $req, EntityManagerInterface $manager, Couleur $couleur)
    {
        $form= $this->createForm(CouleurType::class,$couleur);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($couleur);
            $manager->flush();
            return $this->redirectToRoute('couleurs');
        }
       
        return $this->render('admin/ajoutCouleur.html.twig', [
            'couleur' => $couleur,
            'form' => $form->createView(),
        ]);
    }
}
