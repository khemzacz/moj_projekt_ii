<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ostronieControllerTest extends WebTestCase
{
    public function testOstronie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ostronie');
    }

}
