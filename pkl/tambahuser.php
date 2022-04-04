<?php 
require 'koneksi.php';

// cek apakah tombol submit udah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek berhasil tambah atau tidak
   if(tambahuser($_POST) > 0 ) {
       echo "
       <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'anggota.php';
       </script>
       ";
    
   } else {
       echo " <script>
       alert('data gagal ditambahkan!');
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
        <link rel="stylesheet" href="./css/add-user-style.css">
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
                        Tambah Pengguna
                    </div>
                    <form autocomplete="off" action="" method="post">
                    <div class="form-content">
                        Username : <br>
                        <input type="text" class="input" name="username" id="username" required ><br><br>
                        Password : <br>
                        <input type="password" class="input" name="password" id="password"  autocomplete="new-password"><br><br>
                        Nama     : <br>
                        <input type="text" class="input" name="nama" id="nama" required ><br><br>
                        No.Telp/WA :<br>
                        <input type="text" class="input" name="notelp" id="notelp" ><br><br>
                        <input type="hidden" name="level" id="level" value='pegawai'>    
                        
                        <div class="button-wrapper">
                            <a href="#"><div class="button-batal">Batal</div></a>
                             <button type="submit" class="button-submit" name="submit">Submit</button>
                        </div>
                    </div> 
                    </form>   
                </div>
            </div>
        </div>  
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
                
            </li>
            <input type="hidden" name="level" id="level" value='2'>    
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>