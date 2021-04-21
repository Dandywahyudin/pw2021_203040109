<?php
    require 'php/functions.php';
    $result = query("SELECT * FROM latihan4a");
    
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
<div class="container mt-5">
    <?php foreach ($latihan4a as $lth) : ?>
    <p class ="name">
      <a href="php/detail.php?id=<?= $lth['id']?>">
        <?= $lth["Name"] ?>
      </a>
    </p>
  <?php endforeach; ?>
</div>
</body>
</html>