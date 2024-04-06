<?php
// sertakan file class induknya
require_once 'Person.php';

class Mahasiswa extends Person{
    // member 1 variablle
    protected $semester;
    protected $jurusan;

    // member 2 konstruktor
    public function __construct($_nama, $_gender, $_semester, $_jurusan)
    {
        parent::__construct($_nama, $_gender);
        $this->semester = $_semester;
        $this->jurusan = $_jurusan;
    }

    // member 3 method/fungsi
    // cetak
    public function cetak(){
        parent::cetak();
        echo '<br>Semester : '. $this->semester;
        echo '<br>Jurusan : '. $this->jurusan;
        echo '<hr>';
    }
}

?>