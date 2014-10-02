<?php

namespace Blog\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Hamdi";
        return $this->render('BlogGeneralBundle:Default:index.html.twig', array('name' => $name));
    }
}
