<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index()
    {
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();
        $echo = "Bonjour";
        return $this->render('home.html.twig', ['products' => $products]);
    }
}