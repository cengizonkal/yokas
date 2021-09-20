<?php

namespace Conkal\Yokas\Responses;

abstract class  Response
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

    public function isSuccessful()
    {
        if (in_array($this->getCode(), ['001', '002'])) {
            return true;
        }
        return false;
    }

}