<?php

namespace Conkal\Yokas;

use Conkal\Yokas\Requests\OgrenciEkleRequest;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testOgrencigelisbilgi()
    {
        $this->assertTrue(true);
    }

    public function testKodOlustur()
    {
        $client = new Client('https://yokas.mebnet.net/service.asmx?wsdl', getenv('YOKAS_USERNAME'), getenv('YOKAS_PASSWORD'));
        $this->assertTrue(true);
    }

    public function testOgrenciekle()
    {
        $client = new Client('https://yokas.mebnet.net/service.asmx?wsdl', getenv('YOKAS_USERNAME'), getenv('YOKAS_PASSWORD'));
        $ognrenciEkleRequest = new OgrenciEkleRequest();
        $result = $client->ogrenciekle($ognrenciEkleRequest);

        $this->assertTrue(true);
    }

    public function testOgrenciSil()
    {
        $this->assertTrue(true);
    }
}
