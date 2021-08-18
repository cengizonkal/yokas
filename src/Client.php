<?php

namespace Conkal\Yokas;


use Conkal\Yokas\Requests\OgrenciEkleRequest;
use Conkal\Yokas\Responses\OgrenciEkleResponse;
use Conkal\Yokas\Responses\UniversiteBirimListeResponse;

/**
 * @method ogrenciSil($request)
 * @method Kayitli_ogrenciBilgi($request)
 * @method ogrenciler2($request)
 * @method ogrencigelisbilgi($request)
 */
class Client extends \SoapClient
{

    private string $username;
    private string $password;

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

    public function universitebirimliste($request)
    {

        return simplexml_load_string(parent::universitebirimliste($request)->universitebirimlisteResult->any,UniversiteBirimListeResponse::class);
    }


}