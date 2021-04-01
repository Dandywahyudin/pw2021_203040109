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
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw2021_203040109");
    $result = mysqli_query($conn, "SELECT * FROM latihan4a");
    
?>

<div class="container">
    <h2 class="text-center "><h2>
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
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $row["No"]; ?></td>
			<td><img src="assets/img/<?= $row["Picture"]; ?>" width="100px"></td>
            <td><?php echo $row["Name"]; ?><br></td>
            <td><?php echo $row["Description"]; ?><br></td>
            <td><?php echo $row["Price"]; ?><br></td>
            <td><?php  echo "<button type='button' class='btn btn-danger btn-sm' >". $row["Size"] . $row["S"] ."</button>" ?>
				 </td>
        </tr>   
      </tbody>
  </thead>
  <?php endwhile ;?>
</table>
</body>
</html>