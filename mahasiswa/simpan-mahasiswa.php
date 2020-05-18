<?php 

//include koneksi ke database
include_once('config/koneksi.php');
//deklarasi variable
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_mahasiswa (nama, email, alamat)
VALUES ('$nama', '$email', '$alamat')";

if ($connection->query($query) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Mahasiswa</a></button>";
}

 ?>