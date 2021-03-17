<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
}
table {
  
  font-size: 13px;
  text-align: center;
  padding-right: 50px;
  
}

h2{
  color: brown;
}

h5{
  color: grey; 
}

button {
  font-size: 2px;
  margin: 2px;
  
}

</style>
<body>
    <?php
    $distro = [
        ["no" => "1",
        "Picture" => "img/hoodie1.jfif",
        "Name" => "Black Hoodie",
        "Description" => "SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.299.900",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "2",
        "Picture" => "",
        "Name" => "White Hoodie",
        "Description" => "SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.299.900",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "3",
        "Picture" => "",
        "Name" => "Maroon Hoodie",
        "Description" => "SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.299.900",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "4",
        "Picture" => "",
        "Name" => "Pink Hoodie",
        "Description" => "SIZE: Long sleeve STYLE: Hooded top COMPOSITION: Cotton 60%, Polyester 40% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.299.900",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "5",
        "Picture" => "",
        "Name" => "white Tshirt",
        "Description" => "SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.155.000",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "6",
        "Picture" => "",
        "Name" => "Black Tshirt",
        "Description" => "SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.155.000",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "7",
        "Picture" => "",
        "Name" => "Maroon Tshirt",
        "Description" => "SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.155.000",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "8",
        "Picture" => "",
        "Name" => "Grey Tshirt",
        "Description" => "SIZE: Short sleeve FIT: Slim fit STYLE: Round neck COMPOSITION: Cotton 100% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.155.000",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "9",
        "Picture" => "",
        "Name" => "Blue Crewneck",
        "Description" => "SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.249.000",
        "Size" => "S", "M", "L", "XL"],

        ["no" => "10",
        "Picture" => "",
        "Name" => "Green crewneck",
        "Description" => "SIZE: Long sleeve FIT: Regular fit STYLE: Crewneck, Sweatshirt COMPOSITION: Cotton 60%, Polyester 40% elasticrib Cotton 97%, Elastane 3% CARE INSTRUCTIONS: Machine wash at 40°",
        "Price" => "IDR.249.000",
        "Size" => "S", "M", "L", "XL"],
    ];
?>
<div class="jaket">
    <h2 class="text-center ">H&M<h2>
    <h5 class="text-center ">PREMIUM QUALITY<h5>
    <table class="table table-bordered table-light table-hover "  >
  <thead>
  <tbody>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Size</th>
    </tr>
    <?php foreach ($distro as $i) { ?>
        <tr>
            <td><?php echo $i["no"]; ?></td>
            <td><img src="img`/<?php echo $i["Picture"]?>"></td>
            <td><?php echo $i["Name"]; ?><br></td>
            <td><?php echo $i["Description"]; ?><br></td>
            <td><?php echo $i["Price"]; ?><br></td>
            <td><?php  switch ($i["Size"]){ 
            case "S" :
            echo "<button type='button' class='btn btn-danger btn-sm' >" .  $i["Size"] . "</button>";

            case "M" :
              echo "<button type='button' class='btn btn-info btn-sm'>" . $i["0"] . "</button>";

              case "L" :
                echo "<button type='button' class='btn btn-warning btn-sm'>" . $i["1"] . "</button>";
                
                case "XL" :
                  echo "<button type='button' class='btn btn-dark btn-sm'>" . $i["2"] . "</button>";
                  
                 }?>
            </td>
        </tr>   
      </tbody>
  </thead>
  <?php }?>
</table>
</body>
</html>