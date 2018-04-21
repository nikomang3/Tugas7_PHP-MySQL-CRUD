
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Buku Telepon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      body{
          background-image: url("bg1.png");
      }
      #kotak1{
          margin-top: 5%;
      }
      #judul1{
          text-align: center;
      }
      #bt1{
          background-color:#0087ff;
          color: white;
      }
  </style>
</head>
<body> 

<div class="container">
  <div class="col-md-3 col-sm-2"></div>
  <div class="well well-lg col-md-6 col-sm-8" id="kotak1">
    <h3 id="judul1"><b>Edit Data Buku Telepon</b></h3><br>
    <form action="update.php" method="POST">

<?php

include "connect.php";

$id = $_GET['id'];

$sql = "SELECT nama, email, tel, alamat FROM bukutelepon WHERE id = $id " ;
$res = mysqli_query($link, $sql);
$row = mysqli_fetch_array($res);

$nama = $row['nama'];
$email = $row['email'];
$phone = $row['tel'];
$alamat = $row['alamat'];

        echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>';
            echo '<input id="nama" type="text" class="form-control" name="nama" value="'. $nama .'" required>';
        echo '</div>';
        echo '<br>';
        echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>';
            echo '<input id="email" type="email" class="form-control" name="email" value="'. $email .'">';
        echo '</div>';
        echo '<br>';
        echo '<div class="input-group">';
            echo '<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>';
            echo '<input id="phone" type="tel" class="form-control" name="phone" value="'. $phone .'" required>';
        echo '</div>';
        echo '<br>';
        echo '<div class="input-group">';
                echo '<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>';
                echo '<input id="alamat" type="text" class="form-control" name="alamat" value="'. $alamat .'" >';
        echo '</div>';
        echo '<br>';
        echo '<div class="input-group">';
                echo '<input type="hidden" class="form-control" name="id" value="'. $id .'" >';
        echo '</div>';
?>
        <button id="bt1" type="submit" class="btn"><b>Update</b></button>
    </form>

  </div>
</div>

</body>
</html>