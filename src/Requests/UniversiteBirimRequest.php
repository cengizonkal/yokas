<?php

namespace Conkal\Yokas\Requests;

use Conkal\Yokas\Requests\Request;

class UniversiteBirimRequest extends Request
{


    public $S1;             //universiteid
    public $S2;             // : birimid
    public $S3;             // : birimadi
    public $S4;             // : birimturadi
    public $S5;             // : baglibirim
    public $S6;             // : durum
    public $S7;             // : ogrenimdili
    public $S8;             // : ogrenimturu
    public $S9;             // : osymkod
    public $S10 = "";       //: boş bir string olsun
    public $S11;            //:ogrenimsure
    public $S12;            //: birimadiingilizce

}