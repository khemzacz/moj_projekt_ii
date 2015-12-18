<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class gryController extends Controller
{
    public function gryAction()
    {
        return $this->render('AppBundle:gry:gry.html.twig', array(
                // ...
            ));    }

}
