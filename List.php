

<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Buku Telepon</title>
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
    #bt {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #bt td, #bt th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #bt tr{background-color: white;}

    #bt tr:hover {background-color: #ddd;}

    #bt th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #38007c;
        color: white;
    }
  </style>
</head>
<body> 

<div class="container">
  <div class="col-md-1 col-sm-1"></div>
  
  <div class="well well-lg col-md-10 col-sm-10" id="kotak1">
      <div class="row">
          <h3 id="judul1"><b>Daftar Buku Telepon</b></h3><br>
          <div class="col-md-1 col-sm-1">
            <form action="AddNewList.html">
                <button type="submit" class="btn btn-success">Add New +</button>
            </form>
          </div>
      </div>
    
    
    <table id="bt">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>TELEPON</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        
<!-- script php -->
<?php

include "connect.php";

$sql = "SELECT id, nama, email, tel, alamat "
     . "FROM bukutelepon";
$res = mysqli_query($link, $sql);
while($baris = mysqli_fetch_array($res)) {
    $id = $baris['id'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $baris['nama'] . "</td>";
    echo "<td>" . $baris['email'] . "</td>";
    echo "<td>" . $baris['tel'] . "</td>";
    echo "<td>" . $baris['alamat'] . "</td>";
    echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>'; 
    echo '<td><a href="edit.php?id='.$id.'">Edit</a></td>'; 
    echo "<tr>";
}
mysqli_close($link);
?>
        </tr>
    </table>
  </div>
</div>

</body>
</html>