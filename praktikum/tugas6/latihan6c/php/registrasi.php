<?php
    require 'functions.php';

    if(isset($_POST['register'])){
        if('registrasi'($_POST) > 0){
            echo "<script>
                alert('Registrasi Berhasil');
                document.location.href =  'login.php';
                </script>";
        } else {
            echo "<script>
                alert('Registrasi Gagal');
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="" method="post">
    <table>
    <tr>
        <td><label for="username">username</label></td>
        <td>:</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
    <td><label for="password">password</label></td>
        <td>:</td>
        <td><input type="password" name="password"></td>
    </tr>
    </table><br>
    <button class="btn waves-effect waves-light" type="submit" name="register">REGISTER</button>
</form>
</div>
</body>
</html>
