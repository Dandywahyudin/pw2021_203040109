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
?>