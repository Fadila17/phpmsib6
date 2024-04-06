<?php
class Bank{
    // member 1 variable
    protected $norek;
    public $nama;
    private $saldo;

    // variable static & konstanta
    public static $jml = 0;
    public const BANK = 'Bank Syariah NFA';

    // member 2 constructor
    public function __construct($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    // member 3 method 
    public function menabung ($uang)
    {
        $this->saldo += $uang;
    }
    public function menarik ($uang)
    {
        $this->saldo -= $uang;
    }
    public function cetak ()
    {
        echo '<b>'.self::BANK.'</b>';
        echo '<br>No. Rekening: ' . $this->norek;
        echo '<br>Nama Nasabah: ' . $this->nama;
        echo '<br>Saldo: ' . $this->saldo;
        echo '<hr>';
    }
}
?>