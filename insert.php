<?php
class Firma
{
    public $denumire;
    public $cui;
    public $reg_com;
    public $tara;
    public $judet;
    public $localitate;
    public $adresa;
    public $cont_bancar;
    public $banca;
    public $capital_social;
    public $telefon;
    public $email;
}

class PersoanaFizica
{
    public $nume;
    public $cnp;
    public $tara;
    public $judet;
    public $localitate;
    public $adresa;
    public $telefon;
    public $email;
}

class Produs
{
    public $descriere;
    public $unitate_masura;
    public $cantitate;
    public $pret_unitar;
    public $valoare;
    public $cota_tva;
    public $valoare_tva;
}

class Factura
{
    public $tip_factura;
    public $serie;
    public $numar;
    public $data;
    public $scadenta;
    public $valoare;
    public $valoare_tva;
    public $total;
}
