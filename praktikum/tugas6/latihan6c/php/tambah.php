<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}
    require 'functions.php';
    if (isset($_POST['tambah'])){
        if ('tambah'($_POST) > 0){
            echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <ul>
    <li>
            <label for="Picture">Picture</label><br>
            <input type="Gambar" name="Picture" id="Picture" required><br><br> 
        </li>
        <li>
            <label for="Name">Name</label><br>
            <input type="text" name="Name" id="Name" required><br><br>
        </li>
        <li>
            <label for="Descriptions">Description</label><br>
            <input type="text" name="Descriptions" id="Descriptions" required><br><br>
        </li>
        <li>
            <label for="Price">Price</label><br>
            <input type="text" name="Price" id="Price" required><br><br>
        </li>
        <li>
            <label for="Size">Size</label><br>
            <input type="text" name="Text" id="Text" required><br><br>
        </li>
        <br>
    <button type="submit" name="tambah">Tambah Data</button>
    <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
    </button>
    </ul>
    </form>
</body>
</html>