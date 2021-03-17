<?php 
    $pemain_bola = ["Mohammad Salah","Cristiano Ronaldo","Lionel Messi","Zlatan Ibrahimovic","Neymar Jr"];
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
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($pemain_bola as $p):?>
        <li><?= $p?></li>
        <?php endforeach?>
    </ol>
    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php
            array_push($pemain_bola,"Luca Modric","Sadio Mane");
            sort($pemain_bola);
        ?>
        <?php foreach($pemain_bola as $p_b):?>
        <li><?= $p_b?></li>
        <?php endforeach?>
    </ol>
</body>
</html>