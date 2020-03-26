<?php

namespace App\Controller;

use App\Entity\SessionService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class AuthentificationController extends AbstractController
{
    /**
     * @Route("/authentification", name="authentification")
     */
    public function tokenGeneration(Request $request)
    {

        $session = $request->getSession();
        $sessionService = new SessionService($session);
        $sessionService->apiKeyGeneration();
        return $this->render('authentification/index.html.twig', [
            'controller_name' => 'AuthentificationController',
            'sessionKey' => $session->get('authentificationKey')
        ]);

    }
}
