<?php
$id = $_GET['id'];

//include koneksi
include_once('config/koneksi.php');

$sql = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa = $id LIMIT 1 ";

$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_array($result);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD -  Edit Data Mahasiswa </title>
    <style>
    .container {
      text-align: left;
      margin-top: 0%;
    }
    .input {
      height: 30px;
      width: 99%;
      font-size: 20px;
    }
    .editor {
      width: 99%;
      font-size: 20px
    }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="update-mahasiswa.php" method="POST">
        <fieldset>
          <legend>Edit Data Mahasiswa :</legend>
          Nama :<br>
          <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa']; ?>">
          <input type="text" class="input" name="nama" value="<?php echo $row['nama']; ?>"><br>
          Alamat Email :<br>
          <input type="text" class="input" name="email" value="<?php echo $row['email']; ?>"><br>
          Alamat Rumah :<br>
          <textarea class="editor" name="alamat" rows="6"><?php echo $row['alamat']; ?></textarea><br><br>
          <button type="submit" value="Submit">Update</button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
