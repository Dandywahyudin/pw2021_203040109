<?php
    $jawabanIsset = "Isset adalah = digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false.<br><br>";
    $jawabanEmpty = "Empty adalah =  digunakan untuk memeriksa apakah variabel form tidak dikirim atau tidak berisi data alias kosong.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    echo soal( 
        "font-size:28px; font-family: Arial; color:#8c782d; font-weight: bold;"
    );

?>