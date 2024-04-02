<?php
class Mahasiswa{
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah;
    public $nilai;

    public function __construct($nim, $nama, $kuliah, $matakuliah, $nilai)
    {
        $this->nim = $nim;      
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->kuliah = $kuliah;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    public function grade(){
        if ($this->nilai >= 85 && $this->nilai <= 100) return "A";
        else if ($this->nilai >= 75 && $this->nilai < 85) return "B";
        else if ($this->nilai >= 65 && $this->nilai < 70) return "C";
        else if ($this->nilai >= 40 && $this->nilai < 65) return "D";
        else if ($this->nilai >= 0 && $this->nilai < 40) return "E";
        else return "E";
    }

    public function predikat() {
        $grade = $this->grade();
        switch ($grade) {
            case 'A':
                return 'Memuaskan';
                break;
            case 'B':
                return 'Baik';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'E':
                return 'Buruk';
                break;
        }
    }

    public function status(){
        return $this->nilai >= 65 ? "Lulus" : "Gagal";
    }
}

?>