<?php

namespace App\Controller;

use App\Entity\Equipment;
use App\Form\EquipmentType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $equipment = new Equipment();

        $form = $this->createForm(EquipmentType::class, $equipment);   
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($equipment);
            $manager->flush();

            return $this->redirectToRoute('list_infos', ['id' => $equipment->getId()]);
        }

        return $this->render('home/index.html.twig', [
            'title' => "Nouvel équipement",
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/create", name="create")
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
