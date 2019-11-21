<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SocialControler extends AbstractController
{
    /**
     * @Route ("/contact", name="contact")
     */

    public function NewContact()
    {
        return $this-> render('contact.html.twig');
    }

    /**
     * @Route ("/profil", name="profil")
     */

    public function NewProfil()
    {
        return $this -> render('profil.html.twig');
    }
}