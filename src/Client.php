<?php

namespace Conkal\Yokas;


use Conkal\Yokas\Requests\OgrenciEkleRequest;
use Conkal\Yokas\Requests\OgrenciGelisBilgisiRequest;
use Conkal\Yokas\Requests\OgrencikabulekleRequest;
use Conkal\Yokas\Requests\UniversiteAsibilgiRequest;
use Conkal\Yokas\Requests\UniversiteBirimRequest;
use Conkal\Yokas\Responses\OgrenciEkleResponse;
use Conkal\Yokas\Responses\OgrenciGelisBilgiResponse;
use Conkal\Yokas\Responses\OgrencikabulekleResponse;
use Conkal\Yokas\Responses\UniversiteAsibilgiResponse;
use Conkal\Yokas\Responses\UniversiteBirimResponse;

/**
 * @method ogrenciSil($request)
 * @method Kayitli_ogrenciBilgi($request)
 * @method ogrenciler2($request)
 * @method universitebirimliste($request)
 */
class Client extends \SoapClient
{

    private  $username;
    private  $password;

    public function __construct($wsdl, $password, $username)
    {
        parent::__construct(
            $wsdl,
            [
                'trace' => true,
                'keep_alive' => false,
                'cache_wsdl' => WSDL_CACHE_NONE,
                'connection_timeout' => 10,
            ]
        );
        $this->password = $password;
        $this->username = $username;
        $auth = $this->generateToken();
        $header = new \SoapHeader('http://tempuri.org/', 'KullaniciKimlik', $auth);
        $this->__setSoapHeaders($header);
    }

    /**
     * @return array
     */
    private function generateToken()
    {
        $auth['sUserID'] = $this->username;
        $auth['sEncUserPassword'] = $this->password;
        $header = new \SoapHeader('http://tempuri.org/', 'KullaniciKimlik', $auth);
        $this->__setSoapHeaders($header);
        $auth['sEncUserPassword'] = $this->KodOlustur()->KodOlusturResult;
        return array($auth);
    }

    public function ogrenciekle(OgrenciEkleRequest $request)
    {
        $result = parent::ogrenciEkle($request);
        return new OgrenciEkleResponse($result->ogrenciekleResult);
    }

    public function UniversiteAsibilgi(UniversiteAsibilgiRequest $request)
    {
        $result = parent::UniversiteAsibilgi($request);
        return new UniversiteAsibilgiResponse($result->UniversiteAsibilgiResult);
    }

    public function ogrencigelisbilgi(OgrenciGelisBilgisiRequest $request)
    {
        $result = parent::ogrencigelisbilgi($request);
        return new OgrenciGelisBilgiResponse($result->ogrencigelisbilgiResult);
    }


    public function universiteBirim(UniversiteBirimRequest $request)
    {
        $result = parent::universiteBirim($request);
        return new UniversiteBirimResponse($result->UniversiteBirimResult);
    }


    public function ogrencikabulekle(OgrencikabulekleRequest $request)
    {
        $result = parent::ogrencikabulekle($request);
        var_dump($result);
        return new OgrencikabulekleResponse($result->ogrencikabulekleResult);
    }


}