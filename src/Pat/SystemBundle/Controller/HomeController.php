<?php

namespace Pat\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $title = 'Allô Pat';
        $text = 'Lorem ipsum dolor sit amet';

        return $this->render('@PatSystem/Home/index.html.twig', [ 'title' => $title, 'text' => $text ]);
    }
}