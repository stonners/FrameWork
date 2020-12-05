<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/",name="Main")
 */
class MainController extends AbstractController
{

    /**
     * @Route("/presentation" , name = "main_presentation" )
     */
    public function pres(): Response
    {
        return $this->render("presentation.html.twig");
    }
}





