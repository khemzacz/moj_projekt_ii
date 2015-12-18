<?php


// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller
{
    public function numberAction($count)
    {
        $numbers= array();

		for ($i = 0;$i < $count;$i++)
		{
			$numbers[] = rand(0,100);
			
		}
		
		$numbersList = implode(', ', $numbers);
		
        return new Response(
            '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
        );
    }

    public function apiNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100),
        );

        return new JsonResponse($data);
    }


}