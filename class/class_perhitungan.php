<?php 

class aritmatika{

    var $sisi;
    var $panjang;
    var $lebar;
    var $hasil;
    var $alas;
    var $tinggi;

    function luas($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }

    function persegi($panjang, $lebar){
        $hasil=$panjang*$lebar;
        return "Hasil Luas Persegi Panjang : ".$hasil."<br>";
    }
    function luas_segitiga($alas, $tinggi){
        $hasil=$alas*$tinggi*0.5;
        return "Hasil Luas Segitiga : ".$hasil."<br>";
    }

}

?>
