<?php

class mahasiswa{
    private $nama = "Davit Cany Agho<br/>";
    private $nim = "G.211.21.0116";

    function __construct() {

    }

    function setNama($a) {
        $this->nama=$a;
    }
    
    function setNim($b) {
        $this->nim=$b;
    }

    function getNama() {
        return "Nama saya :" .$this->nama;
    }

    function getNim() {
        return "NIM :" .$this->nim;
    }

    function __destruct() {

    }
}

?>
