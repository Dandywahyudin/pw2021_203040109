<!-- Penulisan php -->
<html>
<body>
<?php
    echo"Hello world";
    print"Sedang belajar PHP";
    ?>
</body>
</html>

<!-- standaroutput -->
<html>
<body>
    <title>contoh Echo dan Print</title>
    </head>
    <body>
    <?php
    echo "teks ini dengan perintah echo";
    ?>
    <br />
    <?php
    print "teks ini dengan perintah print";
    ?>
    <br />
</body>
</html>


<!-- Standar output 2 -->
<html>
<body>
    <title>contoh Echo dan Print</title>
</head>
<body>
    <?php
    echo "<h3>CETAK VARIABEL<h3>";
    
    $a = 1000;

    echo "ISI variabel \$a adalah $a";
    echo "<br />";
    echo 'Isi variabel $a adalah'.$a;
    ?>
    </body>
    </html>