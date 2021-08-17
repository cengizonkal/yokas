<?php

namespace Conkal\Yokas\Responses;

class OgrenciEkleResponse
{
    private $ogrenciekleResult;

    public function __construct($ogrenciekleResult)
    {
        $this->ogrenciekleResult = $ogrenciekleResult;
    }

    public function getMessage()
    {
        return $this->ogrenciekleResult;
    }

    public function getCode()
    {
        return explode('-',$this->ogrenciekleResult)[0];
    }
}