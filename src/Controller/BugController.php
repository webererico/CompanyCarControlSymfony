<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpClient\HttpClient;

class BugController extends AbstractController
{
    


    /**
     * @Route("/bug", name="report_index")
     * @Template ("bug/index.html.twig")
     */
    public function index()
    {
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            'http://bugs-sgi.brasiltecpar.com.br/api/rest/projects/1', [
            'headers' => [
                'Authorization' => 'rtKGmeXyZOcoNkFomydLEoVXqLO255ey',
            ],
            ]
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent('categories');
        var_dump($content);
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        // $categories = $content->get('categories');
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        // var_dump($content);

        return [
            'categories'=> $content
        ];
    }
}
