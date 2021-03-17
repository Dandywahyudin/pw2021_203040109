<?php
$No = [1, 2, 3, 4, 5, 6, 7];  
$Nama = ["Cristiano Ronaldo", "Lionel Messi", "Luca Modric", "Mohammad Salah", "Neymar Jr", "Sadio Mane", "Zlatan Ibrahimovic"];
$Club = ["Juventus", "Barcelona", "Real Madrid", "Liverpool", "Paris Saint Germain", "Liverpool", "AC Milan"];
$Main = [100, 120, 87, 90, 109, 63, 100];
$Gol = [76, 80, 12, 103, 56, 30, 10];
$Assist = [30, 12, 48, 8, 15, 70, 12];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<body>
    <table style="width:550px">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php for ($i=0; $i<count($No); $i++) { ?>
            <tr>
                <td><?php echo "$No[$i]"; ?></td>
                <td><?php echo "$Nama[$i]"; ?></td>
                <td><?php echo "$Club[$i]"; ?></td>
                <td><?php echo "$Main[$i]"; ?></td>
                <td><?php echo "$Gol[$i]"; ?></td>
                <td><?php echo "$Assist[$i]"; ?></td>
            </tr>
        <?php } ?>
            <tr>
                <td>#</td>
                <th colspan="2">Jumlah</th>
                <td><?php echo array_sum($Main); ?></td>
                <td><?php echo array_sum($Gol); ?></td>
                <td><?php echo array_sum($Assist); ?></td>
            </tr>
    </table>
</body>
</html> 