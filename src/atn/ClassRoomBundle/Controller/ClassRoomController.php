<?php

namespace atn\ClassRoomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use atn\UserBundle\Entity\UserClassRoom;

class ClassRoomController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('atnClassRoomBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function displayAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $classRooms = $em->getRepository('atnClassRoomBundle:ClassRoom')->findBy(array("community" => $community));
        return $this->render('atnClassRoomBundle:Community:display.html.twig', array('classRooms' => $classRooms));
    }
            
    public function subscribeAction($user, $classRoom)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $userClassRoom = new UserClassRoom();
        $userClassRoom->setClassRoom($classRoom);
        $userClassRoom->setMember($user);
        
        $em->persist($userClassRoom);
        $em->flush();
        
        return $this->render('atnClassRoomBundle:Community:display.html.twig', array('communities' => $communities));
    }
    
    public function unSubscribeAction($user, $classRoom)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $userClassRoom = $em->getRepository('atnUserBundle:UserClassRoom')->findOneBy(array("member" => $user,"classRoom" => $classRoom));
        $userClassRoom->setUpdateDate();
        $em->flush();
        
        return $this->render('atnClassRoomBundle:Community:display.html.twig', array());
    }
    
}
