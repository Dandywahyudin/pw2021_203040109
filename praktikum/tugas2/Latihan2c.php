<?php
    function tumpukanBola($tumpukan){
        for ($i = 1; $i <= $tumpukan; $i++){
            for ($j = 1; $j <= $i; $j++){
                echo "<div class= bola>$i</div>";
            }
            echo"<br>";
            
        } 
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
        <style>
        .bola{
            width: 50px;
            height: 50px;
            display: inline-block;
            text-align: center;
            padding: 2px;
            font-size: 25px;
            margin: 3px;
            border:2px solid black;
            border-radius: 100%; 
            background-color: salmon;
            line-height: 50px;
            
        }
        </style>
    </head>
    <body>

    <?php tumpukanBola(5) ?>
    </body>
    </html>