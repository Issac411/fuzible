<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
/**
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class SessionService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function apiKeyGeneration()
    {
        $this->session->set('authentificationKey', "test");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return SessionInterface
     */
    public function getSession(): SessionInterface
    {
        return $this->session;
    }

    /**
     * @param SessionInterface $session
     */
    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }



}
