<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Adress;
use App\Entity\City;
use App\Form\ClientType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\VarDumper\VarDumper;

class ClientsController extends AbstractController
{
    /**
     * @Route("/clients", name="clients_index")
     * @Template("clients/index.html.twig");
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $clients = $em->getRepository(Client::class)->findAll();
        return [
            'clients'=>$clients
        ];
    }
    /**
        * @Route("/clients/view/{id}", name="view_client")
        * @Template("clients/view.html.twig");
        * @param Client $client
        */
    public function view(Client $client)
    {
        $em = $this->getDoctrine()->getManager();
        // $adress = $em->getRepository(Adress::class)->find($client->getFk_adress());
        // $city = $em->getRepository(City::class)->find($adress->getFk_city());
        return [
            'client'=> $client,
        ];
    }


    /**
     * @Route("/clients/create", name="client_create")
     * @Template("clients/create.html.twig");
     * @param Client $client
     * @return array
     */
    public function create(Request $request)
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            $this->addFlash('success', "New client created!");
            return $this->redirectToRoute('clients_index');
        }

        return [
            'form'=> $form->createView()
        ];
    }
    /**
     * @Route("/clients/edit/{id}", name="client_edit")
     * @Template("clients/edit.html.twig");
     * @param Client $client
     * @return array
     */
    public function edit(Request $request, Client $client)
    {
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            $this->addFlash('success', "Client edited");
            return $this->redirectToRoute('clients_index');
        }

        return [
            'form'=> $form->createView()
        ];
    }
     /**
     * @Route("/clients/delete/{id}", name="client_delete")
     * @param Client $client
     * @return array
     */
    public function delete(Request $request, Client $client)
    {
        $em =$this->getDoctrine()->getManager();
        $em->remove($client);
        $em->flush();
        $this->addFlash('success', "Client edited");
        return $this->redirectToRoute('clients_index');

    }
}
