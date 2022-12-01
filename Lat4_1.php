<?php 
//class mobil
Class Mobil {
    public $nama;
    public $merk;
    private array $properties = [];

    public function __get($a) {
        echo "Nama Mobil : $a";
        return " CR-V";
    }
}

//bagian main
$mobil=new Mobil();
echo $mobil->Honda
?>