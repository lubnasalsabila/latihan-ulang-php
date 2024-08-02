<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="bil-1">Masukan bilangan :</label>
        <input type="number" value="" name="bil1" id="bil-1">
        <label for="bil-2">Masukan bilangan :</label>
        <input type="number" value="" name="bil2" id="bil-2">
        <label for="bil-3">Masukan bilangan :</label>
        <input type="number" value="" name="bil3" id="bil-3">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $a = $_POST['bil1'];
    $b = $_POST['bil2'];
    $c = $_POST['bil3'];

    if($a > $b && $a > $c){
        echo "Bilangan terbesar adalah ". $a;
    } else if($b > $c && $b > $a){
        echo "Bilangan terbesar adalah ". $b;
    } else if ($c > $a && $c > $b ) {
        echo "Bilangan terbesar adalah ". $c;
    }
}