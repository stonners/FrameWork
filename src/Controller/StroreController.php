<?php


namespace App\Controller;


use App\Repository\Store\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("",name="store_")
 */
class StroreController extends AbstractController
{
    private ProductRepository $productRepository;

    /**
     * StroreController constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/store/product/{id}" , name = "prod_detail" )
     */
    public function prese(int $id): Response
    {
        return $this->render("product-details.html.twig", ['id' => $id]);
    }

    /**
     * @Route("/store/product/{id}/details/{slug}" , name = "show_product" )
     */
    public function pres(Request $request, int $id, string $slug): Response
    {
        return $this->render("store.html.twig", ['id' => $id, 'slug' => $slug,
            'ip' => $request->getClientIp()]);
    }


    /**
     * @Route("/nosProd" , name = "list_products" )
     */
    public function nosProd(): Response
    {
        $produit = $this->productRepository->findAll();
        return $this->render("product-list.html.twig", ['produits' => $produit]);
    }


}