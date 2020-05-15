<?php

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_mahasiswa";
//create variable connection
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if(!$connection)
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 ?>