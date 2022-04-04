<?php 
require 'koneksi.php';

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil tambah atau tidak
   if(tambah($_POST) > 0 ) {
       echo "
       <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'AdminBeranda.php';
       </script>
       ";
   } else {
       echo " <script>
       alert('data gagal ditambahkan!');
       document.location.href = 'AdminBeranda.php';
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
        <link rel="stylesheet" href="./css/add-client-stye.css">
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


        <!-- Main Content -->
        <div class="main-content-wrapper">
            <div class="main-content">
                <div class="form-wrapper">
                    <div class="form-header">
                        &ensp;&ensp;
                        Tambah Klien
                    </div>
                    <div class="form-content">
                    <form action="" method="post">
                        Wajib Pajak<br>
                        <input type="text" class="input" name="wajibpajak" id="wajibpajak" required/><br><br>
                        NPWP<br>
                        <input type="text" class="input" name="npwp" id="npwp" required/><br><br>
                        Nomor Telepon<br>
                        <input type="text" class="input" name="notelp" id="notelp" /><br><br>
                        Catatan<br>
                        <textarea class="input-lg" name="catatan" id="catatan" ></textarea><br>

                        <div class="button-wrapper">
                            <button type=" batal"class="button-batal">Batal</button>
                           <button type="submit" name="submit" class="button-submit">Submit</button>
                        </div>
                    </div>    
                </div>
            </div>
        </div>  
        </form>      
    </body>
</html>


   