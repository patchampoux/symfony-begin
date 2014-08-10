<?php

namespace Pat\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductController extends Controller
{
    public function listAction()
    {
        $products = [
            'produit1',
            'produit2',
            'produit3',
            'produit4',
        ];

        return $this->render('@PatSystem/Product/list.html.twig', [ 'products' => $products ]);
    }

    public function detailAction($name)
    {
        $product = $name;

        return $this->render('@PatSystem/Product/detail.html.twig', [ 'product' => $product ]);
    }
}
