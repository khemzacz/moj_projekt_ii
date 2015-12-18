<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function testAction()
    {
        return $this->render('AppBundle:Test:menu.html.twig', array(
                // ...
            ));    }

}
