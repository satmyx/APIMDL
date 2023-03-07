<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Licencie;
use Doctrine\Persistence\ManagerRegistry;

class TestDbConnectionController extends AbstractController
{
    #[Route('/test/db/connection', name: 'app_test_db_connection')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $testDb = $doctrine->getRepository(Licencie::class)->findAll($doctrine);
        
        dump($testDb);
        
        return $this->render('test_db_connection/index.html.twig', [
            'controller_name' => 'TestDbConnectionController',
        ]);
    }
}
