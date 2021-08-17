<?php

namespace Conkal\Yokas\Requests;

class OgrenciEkleRequest implements \ArrayAccess
{
    public $xsifre = true;
    public $suniversiteid;
    public $skimlikno;
    public $spasaportno;
    public $suyruk;
    public $skangrubu;
    public $sbirimid;
    public $sgiristuru;
    public $sgirispuan;
    public $spuanturu;
    public $sayrilmaneden;
    public $ssinif;
    public $sogrhakki;
    public $shazirlik;
    public $sayrilmatar;
    public $skayittarihi;
    public $sogrhaktarih;
    public $sogrstatu;
    public $sdiplomano;
    public $sdiplomanotu;
    public $saktifdonem;
    public $sdiplomanotsistem;
    public $sgenelnotortalama;
    public $sdiplomaadi;
    public $sdiplomasoyadi;
    public $sogrno;
    public $sdiplomatur;
    public $shazirliksayi;
    public $skktcadres;
    public $sanneadi;
    public $sbabaadi;
    public $stelefonno;
    public $scinsiyet;
    public $sdogumtarihi;
    public $sdogumyeri;
    public $sbolumyili;
    public $sdersyili;
    public $ssom;
    public $semail;
    public $suyrugu;

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