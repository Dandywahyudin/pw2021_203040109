<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw2021_203040109");
    $result = mysqli_query($conn, "SELECT * FROM latihan4a");

    require 'functions.php';

    if (isset($_POST['cari'])) {
        $keyword = $_POST['keyword'];
        $result = query ("SELECT * FROM latihan4a WHERE
                            Picture LIKE '$keyword' OR
                            Name LIKE '$keyword' OR
                            Descriptions LIKE '$keyword' OR
                            Price LIKE '$keyword' OR
                            Size LIKE '$keyword' OR ");
    } else {
        $result = query("SELECT * FROM latihan4a");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<style>

</style>

<body>
<h4 span class="red-text text-darken-4"><center>SELAMAT DATANG</center></h4>
<div class="container">
<div class = "add">
    <a href="tambah.php"><button>Tambah Data</buttom></a>
    
</div>
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
<br>
<form action="" method="post">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
        <br><br>
    </form>
<table border="2" cellpadding="13" cellpadding="0">
    <tr>
    
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Size</th>
    </tr>

    <?php if (empty($result)) : ?>
    <tr>
    <td colspan="6">
    <h1> Data tidak ditemukan</h1>
    </td> 
    </tr>
    <?php else : ?>

    <?php foreach ($result as $row) : ?>
    <tr>
    <td>
    <a href="ubah.php?id=<?= $row['id']?>"><button style="background-color: orange;>">Ubah</button></a>
    <a href="hapus.php?id=<?=$row['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="background-color: green;">Hapus</button></a>

    </td>
    <td><img src="../assets/img/<?= $row["Picture"]; ?>" width="100px"></td>
    <td><?= $row["Name"]; ?></td>
    <td><?= $row["Description"]; ?></td>
    <td><?= $row["Price"]; ?></td>
    <td><?= $row["Size"];?></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>
</div>
</body>
</html>