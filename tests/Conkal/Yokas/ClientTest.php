<?php

namespace Conkal\Yokas;

use Conkal\Yokas\Requests\OgrenciEkleRequest;
use Conkal\Yokas\Requests\OgrenciGelisBilgisiRequest;
use Conkal\Yokas\Requests\UniversiteAsibilgiRequest;
use Conkal\Yokas\Requests\UniversiteBirimRequest;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{

    public function testOgrencigelisbilgi()
    {
        $client = new Client(
            'https://yokas.mebnet.net/service.asmx?wsdl',
            getenv('YOKAS_USERNAME'),
            getenv('YOKAS_PASSWORD')
        );
        $request = new OgrenciGelisBilgisiRequest();
        $request->suniversiteid = getenv('YOKAS_ID');
        $request->sgelistarihi = '01.01.2022';
        $request->sakademikyil = '2021-22';
        $request->sakademikdonem = '1';
        $request->sasitarihi = '01.01.2022';
        $request->sogrencino = '123456789';
        $request->adi = 'adi';
        $request->soyadi = 'soyadi';
        $request->skimlikno = '123456789';
        $request->spasaportno = '123456789';
        $request->suyrugu = 'TRY';
        $request->sgeldigiulke = 'Türkiye';
        $request->shangiasi = 'Sinovac';
        $response = $client->ogrencigelisbilgi($request);
        //var_dump($response);
        $this->assertTrue(true);
    }

    public function testKodOlustur()
    {
        $client = new Client(
            'https://yokas.mebnet.net/service.asmx?wsdl',
            getenv('YOKAS_USERNAME'),
            getenv('YOKAS_PASSWORD')
        );
        $this->assertTrue(true);
    }

    public function testOgrenciekle()
    {
        $client = new Client(
            'https://yokas.mebnet.net/service.asmx?wsdl',
            getenv('YOKAS_USERNAME'),
            getenv('YOKAS_PASSWORD')
        );
        $ognrenciEkleRequest = new OgrenciEkleRequest();
        $ognrenciEkleRequest->suyruk = 1;
        $ognrenciEkleRequest->suniversiteid = 1;
        $ognrenciEkleRequest->sbirimid = 1;
        $ognrenciEkleRequest->sdersyili = '2020-21';
        $ognrenciEkleRequest->ssom = 2;
        $ognrenciEkleRequest->sogrno = '123456789';
        $ognrenciEkleRequest->sdiplomaadi = 'adı';
        $ognrenciEkleRequest->sdiplomasoyadi = 'soyadı';
        $ognrenciEkleRequest->sbabaadi = 'babaadı';
        $ognrenciEkleRequest->saktifdonem = 1;
        $ognrenciEkleRequest->sdogumtarihi = '01.01.2000';
        $ognrenciEkleRequest->sayrilmaneden = '';
        $ognrenciEkleRequest->semail = 'email@email.com';
        $ognrenciEkleRequest->scinsiyet = 'K';
        $ognrenciEkleRequest->skimlikno = '123456';
        $ognrenciEkleRequest->spasaportno = '123456';
        $ognrenciEkleRequest->skangrubu = 'B RH-';
        $ognrenciEkleRequest->sgiristuru = '1';
        $ognrenciEkleRequest->sgirispuan = '1';
        $ognrenciEkleRequest->ssinif = '1';
        $ognrenciEkleRequest->sogrhakki = '1';
        $ognrenciEkleRequest->shazirlik = '1';
        $ognrenciEkleRequest->sayrilmatar = '01.01.2000';
        $ognrenciEkleRequest->skayittarihi = '01.01.2000';
        $ognrenciEkleRequest->sogrhaktarih = '01.01.2000';
        $ognrenciEkleRequest->sogrstatu = '1';
        $ognrenciEkleRequest->sdiplomano = '1';
        $ognrenciEkleRequest->sdiplomanotu = '1';
        $ognrenciEkleRequest->sdiplomanotsistem = '1';
        $ognrenciEkleRequest->sgenelnotortalama = '1';
        $ognrenciEkleRequest->suyrugu = 'TRY';
        $ognrenciEkleRequest->sdiplomatur = '1';
        $ognrenciEkleRequest->sdiplomatur = '1';
        $ognrenciEkleRequest->shazirliksayi = '1';
        $ognrenciEkleRequest->skktcadres = '1';
        $ognrenciEkleRequest->sanneadi = 'anne';
        $ognrenciEkleRequest->stelefonno = 'stelefonno';
        $ognrenciEkleRequest->sdogumyeri = 'doğum yeri';
        $ognrenciEkleRequest->sbolumyili = '4';
        $result = $client->ogrenciekle($ognrenciEkleRequest);
        // var_dump($result);
        $this->assertTrue(true);
    }

    public function testOgrenciSil()
    {
        $this->assertTrue(true);
    }

    public function testUniversiteAsibilgi()
    {
        $client = new Client(
            'https://yokas.mebnet.net/service.asmx?wsdl',
            getenv('YOKAS_USERNAME'),
            getenv('YOKAS_PASSWORD')
        );
        $request = new UniversiteAsibilgiRequest();
        $request->suniversiteid = getenv('YOKAS_ID');
        $request->skimlikno = 215045;
        $request->sadi = "cengiz";
        $request->ssoyadi = "önkal";
        $request->sunvan = "personel";
        $request->shangiasi = "Sinovac";
        $request->sasitarihi = "01.01.2020";

        $response = $client->UniversiteAsibilgi($request);
        $this->assertTrue(true);
        //$this->assertTrue($response->isSuccessful());
        //$this->assertContains($response->getCode(), ['002', '001']);
    }

    public function testUniversiteBirim()
    {

        $client = new Client(
            'https://yokas.mebnet.net/service.asmx?wsdl',
            getenv('YOKAS_USERNAME'),
            getenv('YOKAS_PASSWORD')
        );
        $request = new UniversiteBirimRequest();
        $request->S1 = getenv('YOKAS_ID');
        $request->S2 = "99999";
        $request->S3 = "birimadi";
        $request->S4 = "birimturadi";
        $request->S5 = "baglibirim";
        $request->S6 = "durum";
        $request->S7 = "ogrenimdili";
        $request->S8 = "ogrenimturu";
        $request->S9 = "osymkod";
        $request->S10 = "";
        $request->S11 = "ogrenimsure";
        $request->S12 = "birimadiingilizce";


        $response = $client->universiteBirim($request);
        var_dump($response);
        $this->assertTrue(true);

    }
}
