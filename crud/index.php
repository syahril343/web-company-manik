<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Partner Bisnis</title>
  <style>
    body {
      background-image: url(images/brand-bg.png);
      font-family: Arial, sans-serif;
      background-color: #fffcfc;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-size: small;
    }
    h3{
      text-align: center;
      font-family: Arial, Helvetica, sans-serif;
      font-style: italic;
      font-size: 12px;
    }

    .popup-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .popup-container h2 {
      text-align: center;
    }

    .popup-container form {
      display: flex;
      flex-direction: column;
    }

    .popup-container label {
      margin-bottom: 8px;
    }

    .popup-container input {
      padding: 8px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .popup-container button {
      padding: 10px;
      background-color: #FECE1A;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .popup-container button:hover {
      background-color: #181A1C;
    }
  </style>
</head>
<body>

  <div class="popup-container">
    <h2>Lengkapi Data <br>Menjadi Partner Bisnis</h2>
    <h3>Kami akan segera menghubungi anda</h3>
    <form action="koneksi.php" method="post">
      <label for="username">Nama Lengkap</label>
      <input type="text" id="username" name="username" required>

      <label for="username">Alamat</label>
      <input type="text" id="alamat" name="alamat" required>

      <label for="username">No.Telepon</label>
      <input type="text" id="no.telpon" name="no_tlp" required>

      <label for="username">Email</label>
      <input type="email" id="email" name="email" required>

      <button type="submit" name = proses>SUBMIT</button>
    </form>
  </div>

</body>
</html>


<?php
include "koneksi.php";

  if(isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into barang set
    username = '$_POST[username]',
    alamat = '$_POST[alamat]',
    no_tlp = '$_POST[no_tlp]',
    email = '$_POST[email]'");

    echo "Data telah disimpan";
  }

?>