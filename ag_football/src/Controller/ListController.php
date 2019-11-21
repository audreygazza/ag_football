<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Equipment; 

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Equipment::class);

        $equipments = $repo->findAll();

        return $this->render('list/list.html.twig', [
            'controller_name' => 'ListController',
            'equipments' => $equipments,
        ]);
    }

    /**
     * @Route("/list/12", name="list_infos")
     */
    public function infos()
    {   
        return $this->render('list/list.html.twig');
    }
    
}
