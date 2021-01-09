<?php


namespace App\Controller;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/",name="main_")
 */
class MainController extends AbstractController
{

    /**
     * @Route("/presentation", name="presentation")
     */
    public function pres(): Response
    {
        return $this->render("presentation.html.twig");
    }

    /**
     * @Route("/contact", name="contact", methods={"GET","POST"})
     */
    public function contact(Request $request):Response
    {
        $contact= new Contact();
        $form=$this->createForm(ContactType::class,$contact);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $this->addFlash('success','Merci votre message a bien été pris en compte ! ');

            return  $this->redirectToRoute('main_contact');
        }
        return $this->render('contact.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}





