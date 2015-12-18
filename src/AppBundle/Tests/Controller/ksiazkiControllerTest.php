<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ksiazkiControllerTest extends WebTestCase
{
    public function testKsiazki()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ksiazki');
    }

}
