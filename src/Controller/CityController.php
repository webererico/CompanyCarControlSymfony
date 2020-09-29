<?php

namespace App\Controller;
use App\Entity\City;
use App\Form\CityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class CityController extends AbstractController
{
    /**
     * @Route("/city", name="cities_index")
     * @Template("city/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository(City::class)->findAll();

        return [
            'cities'=> $cities,
        ];
    }

    /**
     * @Route("/city/edit/{id}", name="edit_city")
     * @Template("city/edit.html.twig")
     * @param City $city
     */
    public function edit(Request $request,City $city)
    {
        $form = $this->createForm(CityType::class, $city);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($city);
            $em->flush();
            $this->addFlash('success', 'City updated!');
            return $this->redirectToRoute('cities_index');
        }
        return [
            'form' => $form->createView()
        ];
    }

      /**
     * @Route("/city/delete/{id}", name="delete_city")
     * @param City $city
     * @Template("city/index.html.twig")
     */
    public function delete(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();
        $city = $em->getRepository(City::class)->find($id);
        $em->remove($city);
        $em->flush();
        $this->addFlash('success', "City deleted");
        return $this->redirectToRoute('cities_index');

    }
     /**
     * @Route("/city/create", name="create_city")
     * @Template("city/create.html.twig");
     * @param City $city
     * @return array
     */
    public function create(Request $request)
    {
        $city = new City();
        $form = $this->createForm(CityType::class, $city);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($city);
            $em->flush();   
            $this->addFlash('success', 'New city Created');
            return $this->redirectToRoute('cities_index');
        }
        return [
            'form' => $form->createView()
        ];
    }
}
