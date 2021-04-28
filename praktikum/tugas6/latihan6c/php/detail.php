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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="row">
<div class="col s5 m3">
<div class="card-panel teal">
        
    <div class="gambar"><center>
    <img src="../assets/img/<?= $latihan4a["Picture"]; ?>" width="200px">
    </center>
    </div>
    <div class="keterangan">
        <center><h5 class="satu"><?= $latihan4a["Name"]; ?></h5></center>
        <p><?= $latihan4a["Description"]; ?></p>
        <P><?= $latihan4a["Price"]; ?></P>
        <p><?= $latihan4a["Size"]; ?></p>
        </div>
        </div>
</div>
</div>
<button class="tombol-kembali"><a href="../index.php">kembali</a></button>
</div>
</body>
</html>