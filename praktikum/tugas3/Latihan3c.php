<?php
$Pemain_bola = [
    "Juventus" => "Cristiano Ronaldo",
    "Barcelona" => "Lionel Messi",
    "AC Milan" => "Zlatan Ibrahimovic",
    "Paris Saint Germain" => "Neymar Jr",
    "Liverpol" => "Mohammad Salah",
    "Real Madrid" => "Luca Modric",
    "Liverpool" => "Sadio Mane",
];
asort($Pemain_bola);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="font-style: arial; border: 1px solid black; padding: 10px; width:500px">
        <table>
            <h3 style="margin:0;">Daftar pemain bola terkenal dan clubnya</h3>
            <br>
            <?php foreach ($Pemain_bola as $club => $Pemain_bola) : ?>
                <tr>
                    <td style="font-weight: bold;"><?= $Pemain_bola ?></td>
                    <td>: <?= $club ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html> 