<?php

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Tests\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class SearchController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
    /**
     * @Method("POST")
     */

    public function searchAction(Request $request)
    {
        $zapytanie =  $request->request->get('title');
        $repo = $this->getDoctrine()
                     ->getRepository("AppBundle:Film");
        $query = $repo->createQueryBuilder('a')
                      ->where('a.tytul LIKE :title')
                      ->setParameter('title', '%'.$zapytanie.'%')
                      ->getQuery();
        //$products = $query->setMaxResults(1)->getOneOrNullResult();
        $movies = $query->getResult();
        //if( $products != null )
            //foreach ($products as $value)
                //print_r($value->getTytul());
        //print_r($products->getTytul());
        $movieArray = array();
        $i=0;
        foreach ($movies as $movie) {
            $movieArray[$i]['idFilm'] = $movie->getIdfilm();
            $movieArray[$i]['tytul'] = $movie->getTytul();
            $i++;
        }
        return new JsonResponse(array('movies' =>$movieArray));
        //return new JsonResponse($products);
    }




}


