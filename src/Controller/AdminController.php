<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
   #[Route('ajoutProduit', name: 'ajoutProduit')]
       public function ajoutProduit(Request $request,EntityManagerInterface $manager): Response
       {
//fonction ayant pour but dafficher le formulaire pui des traiter les données de ce formulaire.
       // les formulaires Symfony transitent en methode POST, il ns faut donc appeler Request $request (de htt^Fondation) etant la classe traitant les données des superglobales ($_GET, $_POST, $_cookie...)
       // afinde communiquer avec la BDD pour insere notre produit, il faudra appelet systematiquement EntityManagerInterface $Manager (de l'ORM doctrine)

       //Reflechir en objet , pour un inser nouvlele objet

       $produit= new Produit();
       //ici on instancie un nouvel objet Produit vide, que l'on va charger avec les informations receptionnées du formulaire grace a Request.
       $form=$this->createForm(ProduitType::class, $produit);
       //ici on instancie un objet Form qui va controler automatiquement la correspondance de champs de formulaires demandés (Add->) dans ProduitType avec les propriétés de notre entité Produit
       // la méthode CreateForm() attend 2 arguments : le 1er le nom du formulaire (le type) à utiliser, en second l'entité correspondante de ce formulaire












           return $this->render('admin/ajoutProduit.html.twig', [

  //on renvoie a notre Template la vue du formulaire chargée ds une variable 'form' grace à la méthode createView()
                'form'=>$form->createView()
           ]);
       }
















}
