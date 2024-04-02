<?php
class Siswa{
    // member1 - Variabel
    public $nama;
    public $nilai;
    public $pelajaran;

    // member 2 (methon) - constructor
    public function __construct($nama, $nilai, $pelajaran)
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->pelajaran = $pelajaran;
    }

    // member 3 (method) - function return
    public function gethasil(){
        if ($this->nilai > 55) return "Lulus";
        else return "Tidak Lulus";
    }
}

?>