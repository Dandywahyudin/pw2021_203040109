<?php
    require 'php/functions.php';
    $row = query("SELECT * FROM latihan4a");
    
    if (isset($_GET['cari'])) {
      $keyword = $_GET['keyword'];
      $result = query ("SELECT * FROM latihan4a WHERE
                          'id' LIKE '%".$keyword." OR
                          'Picture' LIKE '%".$keyword."%' OR
                          'Name' LIKE '%".$keyword."%' OR
                          'Descriptions' LIKE '%".$keyword."%' OR
                          'Price' LIKE '%".$keyword."%' OR
                          'Size' LIKE '%".$keyword."%' OR ");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<a href="php/login.php">
  <button type="">Masuk ke halaman admin</button>
</a>
<div class="container mt-5">
<form action="" method="get">
<br>
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" value="cari">Cari</button>
        <br><br>
    </form>

    <?php if (empty($result)) : ?>
    <tr>
    <td colspan="3">
    <h1> Data tidak ditemukan</h1>
    </td> 
    </tr>
    <?php else : ?>

    <?php foreach ($result as $row) : ?>
    <p class ="name">
      <a href="php/detail.php?id=<?= $row['id']?>">
        <?= $row["Name"] ?>
      </a>
    </p>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
</body>
</html>