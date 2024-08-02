<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nilai1">Masukan nilai 1 :</label>
        <input type="number" value="" name="nilai1" id="nilai1">
        <label for="nilai2">Masukan nilai 2 :</label>
        <input type="number" value="" name="nilai2" id="nilai2">
        <label for="nilai3">Masukan nilai 3 :</label>
        <input type="number" value="" name="nilai3" id="nilai3">
        <label for="nilai4">Masukan nilai 4 :</label>
        <input type="number" value="" name="nilai4" id="nilai4">
        <label for="nilai5">Masukan nilai 5 :</label>
        <input type="number" value="" name="nilai5" id="nilai5">
        <label for="nilai6">Masukan nilai 6 :</label>
        <input type="number" value="" name="nilai6" id="nilai6">
        <label for="nilai7">Masukan nilai 7 :</label>
        <input type="number" value="" name="nilai7" id="nilai7">
        <label for="nilai8">Masukan nilai 8 :</label>
        <input type="number" value="" name="nilai8" id="nilai8">
        <label for="nilai9">Masukan nilai 9 :</label>
        <input type="number" value="" name="nilai9" id="nilai9">
        <label for="nilai10">Masukan nilai 10 :</label>
        <input type="number" value="" name="nilai10" id="nilai10">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
    $nilai4 = $_POST['nilai4'];
    $nilai5 = $_POST['nilai5'];
    $nilai6 = $_POST['nilai6'];
    $nilai7 = $_POST['nilai7'];
    $nilai8 = $_POST['nilai8'];
    $nilai9 = $_POST['nilai9'];
    $nilai10 = $_POST['nilai10'];
}
