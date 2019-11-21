<?php

namespace App\Controller;

use App\Entity\Equipment;
use App\Form\EquipmentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $equipment = new Equipment();
        $form = $this->createForm(EquipmentType::class, $equipment);   
        
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $equipment = new Equipment();
        $form = $this->createForm(EquipmentType::class, $equipment);   

        return $this->render('home/index.html.twig', [
            'title' => "Nouvel équipement",
            'form' => $form->createView(),
        ]);
    }


}
