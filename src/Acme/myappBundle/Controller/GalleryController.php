<?php

namespace Acme\myappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\myappBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\Response;


class GalleryController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getEntityManager();
        $photoListObj = $em->getRepository('myappBundle:Photo')->findAll();
        #$photoarr = $photoListObj->getArrayResult();
        #dump($photoListObj); exit;

        return $this->render('myappBundle:Gallery:index.html.twig', array('photoList'=> $photoListObj));    
    }

    public function addAction()
    {
        return $this->render('myappBundle:Gallery:add.html.twig', array(
                // ...
            ));    
    }

}
