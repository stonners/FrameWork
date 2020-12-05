<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("",name="store_")
 */
class StroreController extends AbstractController
{
    /**
     * @Route("/store/product/{id}/details/{slug}" , name = "store_product" )
     */
    public function pres(Request $request,int $id,String $slug): Response
    {
        return $this->render("store.html.twig",['id'=>$id,'slug'=>$slug,
            'ip'=>$request->getClientIp()]);
    }
    /**
     * @Route("/contact" , name = "store_product" )
     */
    public function contact(): Response
    {
        return $this->render("contact.html.twig");
    }


}