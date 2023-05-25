<?php 
$koneksi = mysqli_connect(
    "localhost:3306",
    "u1567503_umum",
    "CAy9C56W@PRB",
    "u1567503_pdampeg");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>