<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="jam">Masukan Jam : </label>
        <input type="number" name="jam" id="jam"><br>
        <label for="menit">Masukan Menit : </label>
        <input type="number" name="menit" id="menit"><br>
        <label for="detik">Masukan Detik : </label>
        <input type="number" name="detik" id="detik"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])) {
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];
    $tj = $jam * 3600;
    $tm = $menit * 60;
    $td = $detik * 1;
    $ta = $tj + $tm + $td;
    echo "hasil dari" .$jam. " jam + ".$menit. " menit + ".$detik." detik =";
    echo $ta. " jumlah detik";

}