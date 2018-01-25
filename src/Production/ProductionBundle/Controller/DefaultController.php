<?php

namespace Production\ProductionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProductionBundle:Default:index.html.twig');
    }
    public function testAction()
    {
        return $this->render('ProductionBundle:Default:test.html.twig');
    }
}
