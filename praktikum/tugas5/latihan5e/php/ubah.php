<?php 
	require 'functions.php';
	$id = $_GET['id'];
	$row = query("SELECT * FROM latihan4a WHERE id = $id") [0];


	if (isset($_POST['ubah'])) {
		if ('ubah'($_POST) >0) {
			echo "<script>
					alert('Data Berhasil diubah!');
					document.location.href = 'admin.php';
				</script>";
		} else {
			echo "<script>
					alert('Data Gagal diubah!');
					document.location.href = 'admin.php';
				</script>";
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/tambah.css">
</head>
<body>
	<div class="container">
		<h2>Ubah Data Fashion</h2>

		<form action="" method="post">
			<input type="hidden" name="id" value="<?= $row['id']; ?>">
			<ul>
				<li>
					<label for="Picture">Picture </label>
					<input type="text" name="Picture" id="Picture" required value="<?= $row['Picture']; ?>"><br><br>
				</li>
				<li>
					<label for="Name">Name  </label>
					<input type="text" name="Name" id="Name" required value="<?= $row['Name']; ?>"><br><br>
				</li>
				<li>
					<label for="Description">Description  </label>
					<input type="text" name="Description" id="Description" required value="<?= $row['Description']; ?>"><br><br>
				</li>
				<li>
					<label for="Price">Price  </label>
					<input type="text" name="Price" id="Price" required value="<?= $row['Price']; ?>"><br><br>
				</li>
                <li>
					<label for="Size">Size  </label>
					<input type="text" name="Size" id="Size" required value="<?= $row['Size']; ?>"><br><br>
				</li>
				<li>
					<button type="submit" name="ubah">Ubah Data!</button>
					<button type="submit">
						<a href="admin.php" style="text-decoration: none;; color: black;">Kembali</a>
					</button>
				</li>
			</ul>
		</form>
	</div>
</body>
</html>