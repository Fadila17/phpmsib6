<?php
class Person{
    // member 1 variablec
    protected $nama;
    protected $gender;

    // member 2 konstruktor
    public function __construct($_nama, $_gender)
    {
        $this->nama=$_nama;
        $this->gender=$_gender;
    }

    // member 3 method/fungsi
    // cetak
    public function cetak(){
        echo '<br>Nama :'. $this->nama;
        echo '<br> Jenis Kelamin :'. $this->gender;
    }
}

?>