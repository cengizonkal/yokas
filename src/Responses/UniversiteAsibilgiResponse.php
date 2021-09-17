<?php

namespace Conkal\Yokas\Responses;

/**
 * @example  002-Personel Aşı bilgileri düzeltilmiştir.
 */
class UniversiteAsibilgiResponse
{
    private $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    public function getMessage()
    {
        return $this->result;
    }

    public function getCode()
    {
        return explode('-', $this->result)[0];
    }
}