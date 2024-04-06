<?php
// sertakan file class induknya
require_once 'Person.php';

class Staff extends Person{
    // member 1 variablle
    protected $nip;
    protected $divisi;
    protected $gaji;

    // member 2 konstruktor
    public function __construct($_nama, $_gender, $_nip, $_divisi, $_gaji){
        parent::__construct($_nama, $_gender);
        $this->nip = $_nip;
        $this->divisi = $_divisi;
        $this->gaji = $_gaji;
    }
    
    // member 3 method/fungsi
    // cetak
    public function cetak(){
        parent::cetak();
        echo '<br>NIP : '. $this->nip;
        echo '<br>Divisi : '. $this->divisi;
        echo '<br>Gaji : '. $this->gaji;
        echo '<hr>';
    }
}

?>