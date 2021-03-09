<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        margin-left: 20px;
        margin-top: 15px;
        display: inline-block;
        
    }
</style>
<body>
<?php
    function gantiStyle($tulisan, $style1, $style2){
        echo " <div style='$style1'>
        <p style='$style2'>$tulisan</p>
        </div>";
    }
    echo gantiStyle(
        "Selamat datang di praktikum PW",
        "width:650px; height: 60px;border: 1px solid ; border-radius:5px;box-shadow: 0 2px 3px 2px rgba(0,0,0,0.4); ",
        "font-family: Arial;font-size:28px; color:#8c782d;font-style: italic;font-weight:bold;"
    )
?> 
</body>
</html>
