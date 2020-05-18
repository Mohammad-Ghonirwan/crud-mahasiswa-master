<?php

//include koneksi ke database
include_once('config/koneksi.php');
//deklarasi variable
$id     = $_POST['id_mahasiswa'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "UPDATE tbl_mahasiswa SET nama = '$nama' ,email = '$email', alamat = '$alamat' WHERE id_mahasiswa = '$id'";

if ($connection->query($query) === TRUE) {
    echo "Update record  successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-mahasiswa.php'>Tambah Data Mahasiswa</a></button>";
}

?>