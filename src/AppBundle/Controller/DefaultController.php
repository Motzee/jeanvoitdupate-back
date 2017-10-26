<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
        @Route("/testAdmin", name="testRooterAdmin")
    */
    public function testRooterAdminAction() {
        return $this->render('default/display.html.twig', array(
            'message' => "Si vous êtes admin, vous verrez ceci"
        ));
    }

    
    /**
        @Route("/testPrep", name="testRooterPrep")
    */
    public function testRooterPrepAction() {
        return $this->render('default/display.html.twig', array(
            'message' => "Si vous êtes préparateur, vous verrez ceci"
        ));
    }
    
    /**
        @Route("/testClient", name="testRooterClient")
    */
    public function testRooterClientAction() {
        return $this->render('default/display.html.twig', array(
            'message' => "Si vous êtes client, vous verrez ceci"
        ));
    }
    
}
