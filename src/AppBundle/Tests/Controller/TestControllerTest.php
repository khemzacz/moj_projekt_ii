<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    public function testTest()
    {

        $client = static::createClient();

        $crawler = $client->request('GET', 'akcja');
    }

}
