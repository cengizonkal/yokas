<?php

namespace Conkal\Yokas;

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testOgrencigelisbilgi()
    {
        $this->assertTrue(true);
    }

    public function testKodOlustur()
    {
        $client = new Client('https://yokas.mebnet.net/service.asmx?wsdl',getenv('YOKAS_USERNAME'),getenv('YOKAS_PASSWORD'));

        $this->assertTrue(true);
    }

    public function testOgrenciekle()
    {
        $this->assertTrue(true);
    }

    public function testOgrenciSil()
    {
        $this->assertTrue(true);
    }
}
