<?php

class Siswa {

    var $nama_pendek;
    var $nama_panjang;

    function tampil_napen (){
        return "Ayu";
    }

    function tampil_napan (){
        return "Hartinah";
    }

}

$data = new Siswa();

echo $data->tampil_napen();
echo $data->tampil_napan();

?>