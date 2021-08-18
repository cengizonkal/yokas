# YOKSIS REST API CLIENT
![Build](https://github.com/cengizonkal/yokas/workflows/Build/badge.svg)


### Kurulum
```
composer require conkal/yokas 
```
### Kullanım
```php
require __DIR__ . '/vendor/autoload.php';
$client = new \Conkal\Yokas\Client('https://yokas.mebnet.net/service.asmx?wsdl', '<YOKAS_USERNAME>', '<YOKAS_PASSWORD>');
```
### Öğrenci Kaydet
```php
require __DIR__ . '/vendor/autoload.php';
$client = new \Conkal\Yokas\Client('https://yokas.mebnet.net/service.asmx?wsdl', '<YOKAS_USERNAME>', '<YOKAS_PASSWORD>');
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

```
