<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
    <style>
        .box {
            width: 30px;
            height: 30px;
            display: inline-block;
            border: 1px solid black;
        }
        .salmon {
            background-color: salmon;
        }
        .lightblue {
            background-color: lightblue;
        }
    </style>

</head>
<body>
    <?php for ($col = 1; $col <= 6; $col++) :

        for ($line = 1; $line <= 6; $line++) :
            if ($col % 2 == !0) :
                if ($line % 2 == !0) : ?>
                    <div class="box lightblue"></div>
                <?php else : ?>
                    <div class="box salmon"></div>
                <?php endif; ?>
            <?php else :
                if ($line % 2 == !0) : ?>
                    <div class="box salmon"></div>
                <?php else : ?>
                    <div class="box lightblue"></div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endfor; ?>
        </br>
    <?php endfor; ?>
</body>
</html>