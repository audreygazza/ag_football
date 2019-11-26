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
     * @Route("/", name="home", methods={"GET","POST"})
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
     * @Route("/list", name="list", methods={"GET"})
     */
    public function list()
    {
        $repo = $this->getDoctrine()->getRepository(Equipment::class);

        $equipments = $repo->findAll();

        return $this->render('list/list.html.twig', [
            'controller_name' => 'ListController',
            'equipments' => $equipments,
        ]);
    }

    /**
     * @Route("/list/{id}", name="list_infos", methods={"GET"})
     */
    public function infos($id)
    {   
        $repo = $this->getDoctrine()->getRepository(Equipment::class);

        $equipment = $repo->find($id);

        return $this->render('list/infos.html.twig', [
            'equipment' => $equipment,
        ]);
    }

}
