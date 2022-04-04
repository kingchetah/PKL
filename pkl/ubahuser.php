<?php 
require 'koneksi.php';

// ambil data di URL
$id = $_GET["id"];

// query data berdasarkan id
$user = query("SELECT * FROM user WHERE id = $id")[0];

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil ubah atau tidak
   if(ubahuser($_POST) > 0 ) {
       echo "
       <script>
        alert('data berhasil diubah!');
        document.location.href = 'anggota.php';
       </script>
       ";
   } else {
       echo " <script>
       alert('data gagal diubah!');
       document.location.href = 'anggota.php';
      </script>";
   }


}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
		<link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/change-profile-style.css">
    </head>

    <body>
        <div class="sidebar-wrapper">
            <div class="sidebar-menu">
                <div class="sidebar-nama">
                    Charvia Cipta Wijaya
                </div>
                <p>Dashboard</p>
                <a href="#"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fas fa-house"></i>&nbsp;&nbsp;
                    Beranda
                </div></a>
                <a href="#"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-user"></i>&nbsp;&nbsp;
                    Profil
                </div></a>
                <a href="#"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-user-group"></i>&nbsp;&nbsp;
                    Client
                </div></a>
                <a href="#"><div class="sidebar-list">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-solid fa-image-portrait"></i>&nbsp;&nbsp;
                    Pengguna
                </div></a>
                <a href="#"><div class="sidebar-footer">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;
                    Log Out
                </div></a>
            </div>
        </div>

        <div class="header-wrapper">
            <div class="header">
                <div class="logo-wrap">
                <img src="./images/logo.png">
                HLP Consultant
                </div>
            </div>
        </div>

    <!-- <h1>Ubah Data User</h1> -->
    <div class="main-content-wrapper">
            <div class="main-content">
                <div class="form-wrapper">
                    <div class="form-header">
                    &ensp;&ensp;
                        Ubah Profil
                    </div>
    <form action="" method="post" class="form-content">
        <input type="hidden" name="id" value="<?= $user["id"]; ?>">
       
                <label for="nama">Nama : </label>  <br>
                <input type="text" name="nama" id="nama" value="<?= $user["nama"]; ?>" required class="input"><br><br>
          
                <label for="username">Username : </label><br>
                <input type="text" name="username" id="username" value="<?= $user["username"]; ?>" class="input"><br><br>
           
                <label for="password">Password : </label><br>
                <input type="text" name="password" id="password" value="<?= $user["password"]; ?>" class="input"><br><br>
                
                <div class="button-wrapper">
                <a href="anggota.php"><div class="button-batal">Batal</div></a>
                <button type="submit" name="submit" class="button-submit">Submit</button>
</div>
    </form>
</body>
</html>