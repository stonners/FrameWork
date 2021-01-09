<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("",name="Main_")
 */
class indexController extends AbstractController
{

    /**
     * @Route("/", name = "homepage")
     */
    public function pres(): Response
    {
        return $this->render("accueil.html.twig");
    }
}
