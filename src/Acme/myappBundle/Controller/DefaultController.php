<?php

namespace Acme\myappBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request; // to read a query/request paramaters 
//, Request $request
class DefaultController extends Controller
{
    /**
     * @Route("/random/{name}/{age}", name="hello")
     */
    public function indexAction($age, $name)
    {
    	//$page = $request->query->get('page', 1);
        return $this->render('myappBundle:Default:index.html.twig', array('name' => $name, 'age' => $age));
    }
}
