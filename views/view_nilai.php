<?php 

require "../class/class_nilai.php";

$nilai_siswa = new mapel();
$uts_score = 80;
$uas_score = 85;
$kehadiran_score = 90;
$tugas_score = 85;
$quiz_score = 75;

$total_score = $nilai_siswa->total_nilai($uts_score, $uas_score, $kehadiran_score, $tugas_score, $quiz_score);
echo "Total Nilai: " . $total_score;
// echo $nilai_siswa->total_nilai(100,80,80,90,80);

?>