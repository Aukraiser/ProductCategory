<?php

namespace Sam\Project\ProcatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SamProjectProcatBundle:Default:index.html.twig', array('name' => $name));
    }
}
