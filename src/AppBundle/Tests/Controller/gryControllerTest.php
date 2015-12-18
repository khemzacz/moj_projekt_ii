<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class gryControllerTest extends WebTestCase
{
    public function testGry()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gry');
    }

}
