<?php

namespace Conkal\Yokas\Requests;

abstract class Request implements \ArrayAccess
{

    public $xsifre = true;
    public function offsetExists($offset)
    {
        return in_array($offset, get_object_vars($this));
    }

    public function offsetGet($offset)
    {
        return get_object_vars($this)[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->{$offset} = $value;
    }

    public function offsetUnset($offset)
    {
        $this->{$offset} = null;
    }

}