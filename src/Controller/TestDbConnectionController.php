<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestDbConnectionController extends AbstractController
{
    #[Route('/test/db/connection', name: 'app_test_db_connection')]
    public function index(): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $em->getConnection()->connect();
        $connected = $em->getConnection()->isConnected();
        
        dump($connected);
        
        return $this->render('test_db_connection/index.html.twig', [
            'controller_name' => 'TestDbConnectionController',
        ]);
    }
}
