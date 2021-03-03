<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1c</title>
</head>
<body>
<style>
        div {
            width: 60px;
            height: 60px;
            border: 2px solid black;
            border-radius: 100%;
            margin: 0px 10px 10px 0px;
            line-height: 60px;
            font-size: 35px;
            text-align: center;
            background-color: salmon;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) : ?>
            <div><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>
</body>
</html>