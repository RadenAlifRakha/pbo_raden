<?php 

class mapel{

    public $uts;
    public $uas;
    public $kehadiran;
    public $tugas;
    public $quiz;
    public $hasil;

    public function total_nilai($uts, $uas, $kehadiran, $tugas, $quiz){
        $this->uts = $uts;
        $this->uas = $uas;
        $this->kehadiran = $kehadiran;
        $this->tugas = $tugas;
        $this->quiz = $quiz;

        
        $nilai_uts = $uts * 0.2;         
        $nilai_uas = $uas * 0.25;        
        $nilai_kehadiran = $kehadiran * 0.25;   
        $nilai_tugas = $tugas * 0.15;    
        $nilai_quiz = $quiz * 0.15;      

        
        $this->hasil = $nilai_uts + $nilai_uas + $nilai_kehadiran + $nilai_tugas + $nilai_quiz;

        return $this->hasil;
        
        // $hasil = ($uts * 0.20 )+ ($uas * 0.25) + ($kehadiran * 0.25) + ($tugas * 0.15) + ($quiz * 0.15);

        // return $hasil;
    }
}

?>