<?php

include "connect.php";

$id = $_POST['id'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$phone   = $_POST['phone'];
$alamat   = $_POST['alamat'];


$sql = "UPDATE bukutelepon SET nama = '$nama', email = '$email', tel = '$phone', alamat = '$alamat' WHERE id = $id ";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: List.php');
exit;