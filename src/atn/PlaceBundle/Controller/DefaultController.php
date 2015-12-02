<?php

namespace atn\PlaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('atnPlaceBundle:Default:index.html.twig', array('name' => $name));
    }
}
