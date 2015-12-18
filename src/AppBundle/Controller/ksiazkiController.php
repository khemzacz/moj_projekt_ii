<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ksiazkiController extends Controller
{
    public function ksiazkiAction()
    {
        return $this->render('AppBundle:ksiazki:ksiazki.html.twig', array(
                // ...
            ));    }

}
