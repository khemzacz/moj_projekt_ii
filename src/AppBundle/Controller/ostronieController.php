<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ostronieController extends Controller
{
    public function ostronieAction()
    {
        return $this->render('AppBundle:ostronie:ostronie.html.twig', array(
                // ...
            ));    }

}
