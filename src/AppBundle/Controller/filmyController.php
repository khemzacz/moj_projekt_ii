<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class filmyController extends Controller
{
    public function filmyAction()
    {
        return $this->render('AppBundle:filmy:filmy.html.twig', array(
                // ...
            ));    }

}
