<?php

namespace Acme\myappBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GalleryControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'photogalleria');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'photo');
    }

}
