<?php

namespace App\Controller;

use App\Entity\Color;
use App\Form\ColorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class ColorController extends AbstractController
{
    /**
     * @Route("/color", name="colors_index")
     * @Template("color/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $colors = $em->getRepository(Color::class)->findAll();

        return [
            'colors'=> $colors,
        ];
    }

      /**
     * @Route("/color/edit/{id}", name="color_edit")
     * @Template("color/edit.html.twig")
     * @param Color $color;
     */
    public function edit(Request $request, Color $color)
    {
        
        $em = $this->getDoctrine()->getManager();
        // $color = $em->getRepository(Color::class)->find($id);
        
        $form = $this->createForm(ColorType::class, $color);
    
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($color);
            $em->flush();
            $this->addFlash('success', 'Color edited!');
            return $this->redirectToRoute('colors_index');
        }
        return [
            'form' => $form->createView()
        ];
    }
      /**
     * @Route("/color/create", name="color_create")
     * @Template("color/create.html.twig")
     * @param Color $color  
     * @return array
     */
    public function create(Request $request) 
    {
        $color = new Color();
        $form = $this->createForm(ColorType::class, $color);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($color);
            $em->flush();
            $this->addFlash('success', 'New color add!');
            return $this->redirectToRoute('colors_index');
        }
        return [
            'form' => $form->createView()
        ];
    }
    
       /**
     * @Route("/color/delete/{id}", name="color_delete")
     * @param Color $color
     * @return array
     */
    public function delete(Color $color)
    {   
        $em = $this->getDoctrine()->getManager();
        $em->remove($color);
        $em->flush();
        $this->addFlash('success', 'Color deleted!');
        return $this->redirectToRoute('colors_index');

    }

}
