<?php
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }
    require 'functions.php';
    $id = $_GET['id'];

    $latihan4a = query("SELECT * FROM latihan4a where id = '$id' ")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="gambar">
    <img src="../assets/img/<?= $latihan4a["Picture"]; ?>" width="200px">
    </div>
    <div class="keterangan">
        <p class="satu"><?= $latihan4a["Name"]; ?></p>
        <p><?= $latihan4a["Description"]; ?></p>
        <P><?= $latihan4a["Price"]; ?></P>
        <p><?= $latihan4a["Size"]; ?></p>
        </div>
<button class="tombol-kembali"><a href="../index.php">kembali</a></button>
</div>
</body>
</html>