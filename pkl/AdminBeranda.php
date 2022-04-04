<?php
        require "koneksi.php";
        session_start();
        
        
        
        if($_SESSION['level']==""){
            header("location:index.php?pesan=gagal");
        }
        if(!isset($_SESSION["login"])){
            header("Location: login.php");
            exit;
    }
    //pagination
    // konfigurasi
    $jumlahDataPerHalaman = 12;
    $jumlahData = count(query("SELECT * FROM klien"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
$klien = query("SELECT * FROM klien LIMIT $awalData , $jumlahDataPerHalaman");

    // jika tombol cari ditekan
if (isset($_POST["cari"]) ){
        
            $klien = cari($_POST["keyword"]);
            
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
        <link rel="stylesheet" href="./css/data-client-style.css">
        <link rel="stylesheet" href="./css/user.css">
    </head>

    <body>
    <?php include("sidebar-admin.php") ?>
   

        
        <!-- Konten Halaman -->
        <div class="main-content-wrapper">
           <div class="main-content">
                <h1><i class="fas fa-database"></i>
                    &nbsp;&nbsp;Data Klien</h1>
                 
                <div class="main-button-container">   
                <a href="tambahklien.php"><div class="add"><i class="fa-solid fa-square-plus fa-lg"></i>&nbsp;&nbsp;Tambah</div></a>
                <a href="#"><div class="delete"><i class="fa-solid fa-trash-can fa-lg"></i>&nbsp;&nbsp;Hapus</div></a>
                </div>

                 <div class="search-container">
                     <div class="search">
                <form action="" method="POST">
        <input type="text" name="keyword" id="search" size="40" autofocus class="searchTerm"
        placeholder="Masukan nama wajibpajak" autocomplete="off">
        <button type="submit" name="cari" class="searchButton">
                          <i class="fa fa-search"></i></button>
    </form> 
      </div>
    </div>
               
    
                    
                        
               

    <!-- <p>Selamat Datang <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">Logout</a>
       
    <a href="tambahklien.php">Tambah Data Klien</a> <br><br>
    <a href="login.php">Kembali ke Login</a> <br>

    <?php  setlocale(LC_ALL, 'id-ID', 'id_ID'); echo" Hari ini hari : ";
echo strftime("%A, %d %B %Y");
 ?>
<br><br> -->
 <!-- navigasi page -->
 <br><br>
<div class="pagination">
 <?php if($halamanAktif > 1) : ?>
 <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
 <?php endif; ?>
 <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif) : ?>
    <a href="?halaman=<?= $i; ?>" class="active"><?= $i; ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
    <?php endfor; ?>


    <?php if($halamanAktif < $jumlahHalaman) : ?>
 <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
 <?php endif; ?>
</div>
<br><br>
 <!-- Main Content -->
 
            
 <div class="tabel-wrap">
    
    <?php
        foreach( $klien as $data ) :
        ?> 

        <!-- <td>
                  
                    <a href="hapusklien.php?id=<?= $data['id']; ?>" onclick="
                    return confirm('yakin?');">hapus</a>
                </td> -->
            
                <div class="tabel">
                        <div class="tabel-header"><a href="previewklien.php?id=<?= $data['id']; ?>"><?= $data['wajibpajak']; ?></a></div>
                        <div class="tabel-list"><?= $data['npwp']; ?></div>
                        <div class="tabel-list"><?= $data['notelp']; ?></div>
                    </div>
                
       
    <?php endforeach; ?></div>

          </div>
       </div>
     

    <?php

 
// menghubungkan dengan koneksi database

 
// mengambil data klien
$data_klien = mysqli_query($koneksi,"SELECT * FROM klien");
 
// menghitung data klien
$jumlah_klien = mysqli_num_rows($data_klien);
?>
<p>Jumlah Data Klien : <b><?php echo $jumlah_klien; ?></b></p>
<br>

</body>
</html>