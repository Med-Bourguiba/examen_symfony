<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TacheController extends AbstractController
{
    ///affiche la liste
    #[Route('/', name: 'home.index')]
    public function home(ArticleRepository $repository): Response
    {
      
        //return $this->render('tache/index.html.twig');
        /*** */
        //$taches = ['tache 1', 'tache 2', 'tache 3'];
        //return $this->render('taches/index.html.twig', ['taches' => $taches]);
        /***** */
        // mettre dans le tableau $taches
        #$taches= $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $this->render('taches/index.html.twig',['taches'=>$repository-> findAll()]);
    }

    /*#[Route('/tache/save', name: 'tache.save')]
    public function save(EntityManagerInterface $entityManager): Response
    {
        $tache = new Tache();
        $tache->setTitre('Tache 1');
        $tache->setDescription("aaa");
        $tache->setDate("02/01/2022");
        $entityManager->persist($tache);
        $entityManager->flush();
        return new Response('Tache enregistré avec l\'identifiant ' . $tache->getId());
    }*/



   

}
