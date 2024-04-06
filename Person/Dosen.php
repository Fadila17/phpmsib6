<?php
// sertakan file class induknya
require_once 'Person.php';

class Dosen extends Person{
    // member 1 variablle
    protected $nidn;
    protected $gelar;

    // member 2 konstruktor
    public function __construct($_nama, $_gender, $_nidn, $_gelar)
    {
        parent::__construct($_nama, $_gender);
        $this->nidn = $_nidn;
        $this->gelar = $_gelar;
    }

    // member 3 method/fungsi
    // cetak
    public function cetak(){
        parent::cetak();
        echo '<br>NIDN : '. $this->nidn;
        echo '<br>Gelar : '. $this->gelar;
        echo '<hr>';
    }
}

?>