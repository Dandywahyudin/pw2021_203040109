<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw2021_203040109");
    $result = mysqli_query($conn, "SELECT * FROM latihan4a");
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
<div class="container mt-5">
<div class = "add">
    <a href="tambah.php">Tambah Data</a>
</div>
<table border="2" cellpadding="13" cellpadding="0">
    <tr>
    
    <th>Opsi</th>
    <th>Gambar</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Size</th>
    </tr>

    <?php foreach ($result as $row) : ?>
    <tr>
    <td>
        <a href=""><button>Ubah</button></a>
        <a href=""><button>Hapus</button></a>
    </td>
    <td><img src="../assets/img/<?= $row["Picture"]; ?>" width="100px"></td>
    <td><?= $row["Name"]; ?></td>
    <td><?= $row["Description"]; ?></td>
    <td><?= $row["Price"]; ?></td>
    <td>
    <a href=""><button>S</button></a>
    <a href=""><button>M</button></a>
    <a href=""><button>L</button></a>
    <a href=""><button>XL</button></a>
    </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>