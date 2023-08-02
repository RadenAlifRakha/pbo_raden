<?php 

class gaji{

    var $jamKerja;
    var $hasil;

    function gajinya($jamKerja){
        $hasil=$jamKerja*50000+1000000;
        return "Gaji Karyawan : ".$hasil."<br>";
    }
}

?>