<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class filmyControllerTest extends WebTestCase
{
    public function testFilmy()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/filmy');
    }

}
