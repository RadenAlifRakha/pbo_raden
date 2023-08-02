<?php 
require "../class/class_perhitungan.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculate Area</title>
</head>
<body>
    <form method="post">
        <label for="sisi">Sisi Persegi:</label>
        <input type="number" name="sisi" id="sisi" required><br>

        <label for="panjang">Panjang Persegi Panjang:</label>
        <input type="number" name="panjang" id="panjang" required><br>

        <label for="lebar">Lebar Persegi Panjang:</label>
        <input type="number" name="lebar" id="lebar" required><br>

        <label for="alas">Alas Segitiga:</label>
        <input type="number" name="alas" id="alas" required><br>

        <label for="tinggi">Tinggi Segitiga:</label>
        <input type="number" name="tinggi" id="tinggi" required><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    // Include the class definition
    // include 'aritmatika.php';

    if (isset($_POST['calculate'])) {
        $aritmatika = new aritmatika();

        $sisi = $_POST['sisi'];
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        // Calculate the areas using the methods from the class
        $luasPersegi = $aritmatika->luas($sisi);
        $luasPersegiPanjang = $aritmatika->persegi($panjang, $lebar);
        $luasSegitiga = $aritmatika->luas_segitiga($alas, $tinggi);

        // Display the results
        echo $luasPersegi;
        echo $luasPersegiPanjang;
        echo $luasSegitiga;
    }
    ?>
</body>
</html>
