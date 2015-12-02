<?php

namespace atn\ClassRoomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('atnClassRoomBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function displayAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $communities = $em->getRepository('atnClassRoomBundle:Community')->findAll();
        return $this->render('atnClassRoomBundle:Community:display.html.twig', array('communities' => $communities));
    }
    
    
}
