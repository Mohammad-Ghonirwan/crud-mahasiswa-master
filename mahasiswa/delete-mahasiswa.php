<?php

//include koneksi ke database
include_once('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa = '$id'";

$result = mysqli_query($connection, $query);

if ($connection->query($query) === TRUE) {
    echo "Delete record  successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-mahasiswa.php'>Tambah Data Mahasiswa</a></button>";
}

 ?>