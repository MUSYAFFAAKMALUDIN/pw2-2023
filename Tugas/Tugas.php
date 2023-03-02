<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
    $tugas_fruits = [
        ["Number" => "1" , "Nama buah" => "Melon" , "warna buah" => "Hijau" , "Stock buah" => "20" , "Harga" => "20000" , "deskripsi" => "Buah Melon yang segar dan fresh cocok untuk makanan penutup"],
        ["Number" => "2" , "Nama buah" => "Jeruk" , "warna buah" => "Orange" , "Stock buah" => "70" , "Harga" => "10000" , "deskripsi" => "Buah Jeruk segar dan fresh cocok untuk pencuci mulut"],
        ["Number" => "3" , "Nama buah" => "Anggur" , "warna buah" => "Ungu" , "Stock buah" => "50" , "Harga" => "15000" , "deskripsi" => "Buah Anggur Ungu manis dan fresh cocok untuk menjadi cemilan"],
        ["Number" => "4" , "Nama buah" => "Naga" , "warna buah" => "Pink" , "Stock buah" => "25" , "Harga" => "15000" , "deskripsi" => "Buah Naga mempunyai warna yang pekat dan cocok dibuat jus"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
    body{
      background-color: #452345
    }
    table {
      text-align: center;
      background-color: #f7f7f7;
    }
  </style>

</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4 text-light ">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr class="text-inverse">
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stock</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach($tugas_fruits as $fruit){
            echo "<tr>";
            echo '<td>' . $fruit ["Number"] . '</td>';
            echo '<td>' . $fruit ["Nama buah"] . '</td>';
            echo '<td>' . $fruit ["warna buah"] . '</td>';
            echo '<td>' . $fruit ["Stock buah"] . '</td>';
            echo '<td>' . $fruit ["Harga"] . '</td>';
            echo '<td>' . $fruit ["deskripsi"] . '</td>';
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>