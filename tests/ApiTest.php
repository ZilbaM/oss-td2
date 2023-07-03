<?php

use Zilbam\Td2\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{

    public function testGetRandomNumber()
    {
        $api = new Api();
        $this->assertIsInt($api->getRandomNumber());
    }

    public function testGetDate()
    {
        $api = new Api();
        $this->assertInstanceOf(\DateTime::class, $api->getDate());
    }

    public function testGetDateAsString()
    {
        $api = new Api();
        $this->assertIsString($api->getDateAsString());
    }

}
