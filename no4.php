<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="j_detik">Masukan Jumlah detik :</label>
        <input type="number" class="j_detik" id="j_detik" name="j_detik">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])) {
    $j_detik = $_POST['j_detik'];
    
    $jam = floor($j_detik / 3600);
    echo $jam. " Jam ";

    $carimenit = $j_detik % 3600;
    $menit = floor($carimenit / 60);
    echo $menit. " Menit ";

    $detik = $carimenit % 60;
    echo $detik. " Detik ";
}