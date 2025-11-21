<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;  
use App\Repository\ProductRepository;
use App\Form\ProductType;

final class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $repository): Response
    {
        // $products = $repository->findAll();
        // dump($products);
        return $this->render('product/index.html.twig', [
            'products' => $repository->findAll(),
        ]);
    }
    #[Route('/product/{id<\d+>}', name: 'product_show')]
    public function show(Product $product): Response
    { 
        if ($product == null) {
            throw $this->createNotFoundException('Product no found');
        }
        return $this->render('product/show.html.twig', [
                        'product' => $product,
        ]);

    }
    #[Route('/product/new', name: 'product_new')]
    public function new(ProductRepository $repository): Response
    {  
        $form =$this->createForm(ProductType::class);
        return $this->render('product/new.html.twig',['form'=>$form,]);

    }
}
