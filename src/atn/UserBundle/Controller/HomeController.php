<?php

namespace atn\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function homeAction(Request $request) {
       return $this->render('atnUserBundle:Home:home.html.twig', array(
        ));
    }


}
