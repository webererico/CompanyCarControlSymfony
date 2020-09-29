<?php

namespace App\Controller;
use App\Entity\Car;
use App\Entity\Client;
use App\Form\CarOwnerType;
use App\Form\CarType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class CarController extends AbstractController
{
    /**
     * @Route("/car", name="cars_index")
     * @Template("car/index.html.twig")
     * 
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository(Car::class)->findAll();
        return [
            'cars'=> $cars
        ];
    }


     /**
     * @Route("/car/owner", name="car_owner")
     * @Template("car/owner.html.twig")
     * 
     */
    public function changeOwner()
    {

        return [];
        
    }
             /**
     * @Route("/car/edit/{id}", name="car_edit")
     * @param Car $car
     * @Template("car/edit.html.twig")
     * 
     */
    public function edit(Request $request, Car $car)
    {
        
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();
            $this->addFlash('success', 'New car created!');
            return $this->redirectToRoute('cars_index');
        }
        return[
            'form' => $form->createView()
        ];
    }

             /**
     * @Route("/car/create", name="car_create")
     * @Template("car/create.html.twig")
     * 
     */
    public function create(Request $request)
    {   
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();
            $this->addFlash('success', 'New car created!');
            return $this->redirectToRoute('cars_index');
        }
        return[
            'form' => $form->createView()
        ];
    }


    /**
     * @Route("/car/delete/{id}", name="car_delete")
     * 
     * @param Car $car
     */
    public function delete(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository(Car::class)->find($id);
        $em->remove($car);
        $em->flush();
        $this->addFlash('success', 'Car deleted with success');
        return $this->redirectToRoute('cars_index');
    }

             /**
     * @Route("/car/client/{id}", name="car_client")
     * @Template("car/client.html.twig")
     * @param Client $client
     */
    public function carClient(Request $request, $id, Client $client)
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository(Car::class)->findByClient($id);

        return [
            'cars' => $cars,
            'client' => $client
        ];
    }

    /**
     * @Route("/car/owner/{id}", name="car_owner")
     * @Template("car/edit_owner.html.twig")
     * @param Car $car
     */
    public function editOwner(Request $request, $id, Car $car)
    {
        $em = $this->getDoctrine()->getManager();
        // $car = $em->getRepository(Car::class)->findByClient($id);
        $form = $this->createForm(CarOwnerType::class, $car);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($car);
            $em->flush();
            $this->addFlash('success', 'Owner altered!');
            return $this->redirectToRoute('cars_index');
        }
        return[
            'form' => $form->createView()
        ];

    }
}
