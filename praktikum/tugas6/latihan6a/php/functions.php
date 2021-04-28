<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw2021_203040109");

    return $conn;

}

function query($sql) 
{
	$conn = koneksi();
	$result = mysqli_query($conn, $sql);
	$rows =[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	$conn = koneksi();
	$Picture = htmlspecialchars($data['Picture']);
	$Name = htmlspecialchars($data['Name']);
	$Descriptions = htmlspecialchars($data['Descriptions']);
	$Price = htmlspecialchars($data['Price']);
	$Size = htmlspecialchars($data['Size']);

	$query = "INSERT INTO latihan4a
				VALUES
				('', '$Picture', '$Name', '$Descriptions', '$Price', '$Size')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM latihan4a WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$Picture = htmlspecialchars($data['Picture']);
	$Name = htmlspecialchars($data['Name']);
	$Description = htmlspecialchars($data['Description']);
	$Price = htmlspecialchars($data['Price']);
	$Size = htmlspecialchars($data['Size']);

	$query = "UPDATE latihan4a
				SET
				Picture = '$Picture',
				Name = '$Name',
				Description = '$Description',
				Price = '$Price',
				Size = '$Size'
				WHERE id = '$id'";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>
